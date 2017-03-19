<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterModel extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}	

	// public function create($titre, $intitulle, $objectif, $progression, $id_utilisateur) {
	// 	$data = array(
	// 		'titre' => $titre,
	// 		'intitulle' => $intitulle,
	// 		'objectif' => $objectif,
	// 		'progression' => $progression,
	// 		'id_utilisateur' => $id_utilisateur
	// 		);

	// 	return $this->db->insert('succes', $data);

	// }

	public function register($client, $email, $mdp){
		// var_dump($client, $email);
		// exit;
		$data = ['client' => $client, 'email' => $email, 'mdp' => $mdp];

		$this->db->query("
			INSERT INTO utilisateurs(client, email, mdp) 
			VALUES(?, ?, ?)", [$client, $email, md5($mdp)]);

		return $data;
	}
}