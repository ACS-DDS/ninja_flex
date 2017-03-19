<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AchievoController extends CI_Controller {

	public function __construct() {
		parent::__construct();	//toujours récuperer le __construct CI 
		//$this->output->enable_profiler(true);// ensuite on debug
		$this->load->helper('url');
		$this->load->helper('date');	
		$this->load->library('session');
		$this->load->model('AchievoModel');
	}	
	// public function getListeTaches(){
	// 	if(!$this->session->userdata('client')){ // je restrinct l'accée au tchat  ********************
	// 		redirect(base_url());
	// 		return;
	// 	}
	// 	$liste['lecture'] = $this->AchievoModel->listeTaches();
	// 	$this->load->view('reads/header_achievo');
	// 	$this->load->view('achievo', $liste);
	// 	$this->load->view('reads/footer');		
		  // else {
		// 	var_dump($_SESSION['client'], 'est TJRS CO !!');// sinon ta session est tjrs co
		// } 
	// }
	public function getIdListeTache() {	
		if(!$this->session->userdata('client')){ // je restrinct l'accée au tchat  ********************
			redirect(base_url());
			return;
		}	

		// $id = $this->input->get('id');	
		$data['id_user'] = $this->AchievoModel->idListeTache($id);

		$this->load->view('reads/header_read');
		$this->load->view('read', $data);	
		// $this->load->view('reads/footer');	
	}	
	public function SessionPropreAchacun(){		

		if(!$this->session->userdata('client')){ // je restrinct l'accée au tchat  ********************
			redirect(base_url());
			return;
		}	
		if($this->input->post('deco')) {

			$this->session->unset_userdata('client');
			redirect(base_url());
		}

		// $this->input->get('id');		
		$id_session = $this->AchievoModel->getUserid($this->session->userdata('client'));		
			//je lis le block message
		$note['lecture'] = $this->AchievoModel->sessionForUser($id_session, $this->session->userdata('client'));			
		//je récupère liste des client
		$this->load->view('reads/header_achievo');
		$this->load->view('achievo', $note);
		$this->load->view('reads/footer');	
	}
}