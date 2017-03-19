<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TchatModel extends CI_Model {

	public function __construct(){
	parent::__construct();
	$this->load->helper('url');
	$this->load->database();
	}

	public function message($message, $id_client) {
		$data = array(
			"message"   => $message,			
			"id_user"   =>  $id_client,			
			);
		return $this->db->insert("post", $data);
	}

	public function getHistory(){		

		$sql = "SELECT * FROM post";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}	

	// public function getHistory($id){		
	// 		/*LES JOINTURES REVOIR LES COURS PAS ENCORE ALAISE AVEC*/
	// 		$select = "SELECT utilisateurs.client,post.message,post.temp_reel 

	// 		   FROM post 

	// 	       JOIN utilisateurs ON post.id_user = utilisateurs.id

	// 	       WHERE utilisateurs.id = ? ORDER BY temp_reel DESC";

	// 		$query = $this->db->query($select, [$id]);

	// 		return $query->result_array();
	// }
