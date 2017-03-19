<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateController extends CI_Controller {

	public function __construct() {
		parent::__construct();	//toujours récuperer le __construct CI 
		//$this->output->enable_profiler(true);// ensuite on debug
		$this->load->helper('url');
		$this->load->helper('date');	
		$this->load->library('session');
		$this->load->model('CreateModel');
		$this->load->model('AchievoModel');
	}

	public function createNewTache(){
		// $id = $this->input->get('id');
		$titre = $this->input->post('titre');
		$intitulle = $this->input->post('intitulle');
		$objectif = $this->input->post('objectif');
		$progression = $this->input->post('progression');

		$id_utilisateur = $this->AchievoModel->getUserid($this->session->userdata('client'));
		if(!empty($titre) && !empty($intitulle) && !empty($objectif)){

			$this->CreateModel->create($titre, $intitulle, $objectif, $progression, $id_utilisateur);
			redirect(base_url('index.php/sessionForUser'));
		} else {
			
			echo '<script>alert(\'Error read "The short instruction guide"\')</script>';
		}

		$this->load->view('reads/header_read');	
		$this->load->view('create');
		
	}
}
