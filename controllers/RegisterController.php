<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	public function __construct() {
		parent::__construct();	//toujours récuperer le __construct CI 
		// $this->output->enable_profiler(true);// ensuite on debug
		$this->load->helper('url');
		$this->load->helper('date');	
		$this->load->library('session');
		$this->load->model('RegisterModel');
	}

	public function youRegister(){

		$client = $this->input->post('pseudo');
		$email = $this->input->post('mail');
		$mdp = $this->input->post('mdp');		

		if(!empty($this->input->post())) {

			$this->RegisterModel->register($client, $email, $mdp);
			redirect(base_url('index.php/log'));
			
		}

		$this->load->view('reads/header');		
		$this->load->view('register');
	}
}
