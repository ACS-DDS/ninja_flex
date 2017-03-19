<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteController extends CI_Controller {

	public function __construct() {
		parent::__construct();	//toujours récuperer le __construct CI 
		$this->output->enable_profiler(true);// ensuite on debug
		$this->load->helper('url');
		$this->load->helper('date');	
		$this->load->library('session');
		$this->load->model('DeleteModel');
	}

	public function deleteIdListeTache() {

		if($id = $this->input->get('id')){
			$this->DeleteModel->delete($id);
			redirect('http://yassinl.dijon.codeur.online/achievo_project/index.php/sessionForUser');
		}					
		$this->load->view('delete');
	}	
}