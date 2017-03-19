<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function log($a, $b){
		
		$data = [$a, $b];
		$requete = $this->db->query("
			SELECT * FROM utilisateurs 
			WHERE client = ? AND mdp = ?", $data);

		return $row = $requete->row('client', 'mdp');		
	}
}
