<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateModel extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}	

	public function create($titre, $intitulle, $objectif, $progression, $id_utilisateur) {
		$d = array(
			'titre' => $titre,
			'intitulle' => $intitulle,
			'objectif' => $objectif,
			'progression' => $progression,
			'id_utilisateur' => $id_utilisateur
			);

		return $this->db->insert('succes', $d);
	}
}

// public function create($a, $b, $c, $d, $e)	{	 

	// 	return $this->db->query('INSERT INTO succes(titre, intitulle, objectif, progression, id_utilisateur) VALUES('.$a.', '.$b.', '.$c.', '.$d.', '.$e.')');

		
	// }