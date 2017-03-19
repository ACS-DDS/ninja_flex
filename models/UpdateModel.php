<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateModel extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function idListeTache($id){
		$d = [$id];
		$requete = $this->db->query(
			"SELECT titre,intitulle,objectif,progression 
			FROM succes 
			WHERE id=?", $d);
	
		return $requete->row();
	}	

	public function update($id, $a){
		$data = [$a];
		return $this->db->query(
			"UPDATE succes 
			SET progression=? 
			WHERE id=" .$id, $data);
	}
}