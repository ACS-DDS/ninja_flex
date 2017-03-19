<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateController extends CI_Controller {

	public function __construct() {
		parent::__construct();	//toujours récuperer le __construct CI 
		// $this->output->enable_profiler(true);// ensuite on debug
		$this->load->helper('url');
		$this->load->helper('date');	
		$this->load->library('session');
		$this->load->model('UpdateModel');
	}

	public function updateIdListeTache() {
		if(!$this->session->userdata('client')){ // je restrinct l'accée au tchat  ********************
			redirect(base_url());
			return;
		}	
		$id = $this->input->get('id');
		if($this->input->post() == false) {

		} else if($a = $this->input->post('a')){
			
			$this->UpdateModel->update($id, $a);
			// redirect('http://yassinl.dijon.codeur.online/achievo_project/index.php/listeTaches');
		} else {

			var_dump('ERROR !!!');
		}

		$id = $this->input->get('id');	
		$data['id_user'] = $this->UpdateModel->idListeTache($id);

		$this->load->view('reads/header_read');
		$this->load->view('read', $data);
		$this->load->view('update');	
	}	
}