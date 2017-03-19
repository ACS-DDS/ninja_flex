<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AchievoModel extends CI_Model {

	public function __construct(){
	parent::__construct();
	$this->load->helper('url');
	$this->load->database();
	}

	public function listeTaches(){

	$d = ['id','titre', 'intitulle', 'objectif', 'progression'];

	$requete = $this->db->query("SELECT id,titre,intitulle,objectif,progression from succes", $d);
	return $requete->result_array();
	}

	public function idListeTache($id){
	$d = [$id];
	$requete = $this->db->query("SELECT titre,intitulle,objectif,progression from succes WHERE id= ?", $d);

	return $requete->row();
	}

	public function getUserid($id_client){
	$d = [$id_client];
	$requete = $this->db->query(
		'SELECT id 
		FROM utilisateurs 
		WHERE client = ?', $d);

	return $requete->row('id');
	}

	public function sessionForUser($sessionPropreAchacun, $id){		
	$s = [$sessionPropreAchacun];
	// $i = [$id];	

	$session = $this->db->query(
		'SELECT id, titre, intitulle, objectif, progression, id_utilisateur 
		FROM succes 
		WHERE id_utilisateur = ?', $s/*, $id*/);

	return  $session->result_array($id);
	}
	public function message($message, $id_client) {
		$data = array(
			"message"   => $message,			
			"id_user"   =>  $id_client,			
			);
		return $this->db->insert("post", $data);
	}
	public function readMessage($id){		
		/*LES JOINTURES REVOIR LES COURS PAS ENCORE ALAISE AVEC*/
		$select = "SELECT utilisateurs.client,post.message,post.temp_reel 

		   FROM post 

	       JOIN utilisateurs ON post.id_user = utilisateurs.id

	       -- JOIN salon ON post.id_salon = salon.id

	       WHERE utilisateurs.id = ? ORDER BY temp_reel DESC";

		$query = $this->db->query($select, [$id]);

		return $query->result_array();
	}
}

/************************ MA JOINTURE FUTUR *******************************************/

// $session = $this->db->query('SELECT utilisateurs.client, succes.id, succes.titre, succes.intitulle, succes.objectif, succes.progression, succes.id_utilisateur
// 				   FROM utilisateurs 
// 				   JOIN succes ON succes.id_utilisateur = utilisateurs.id WHERE succes.id_utilisateur = ?', $s, $id);

// 		return  $session->result_array($id);