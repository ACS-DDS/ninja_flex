<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteModel extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}	

	public function delete($id){
		$d = [$id];
		return $this->db->query("
			DELETE FROM succes 
			WHERE id=?", $d);	
	}
}