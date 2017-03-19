<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function __construct() {
		parent::__construct();	//toujours récuperer le __construct CI 
		// $this->output->enable_profiler(true);// ensuite on debug
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->library('session');			
	}

	public function index()	{	

		

		 // si tu n'est pas connecter tu n'entre pas
		$this->load->view('reads/header_home');
		$this->load->view('home');
		$this->load->view('reads/footer');
	}	
}