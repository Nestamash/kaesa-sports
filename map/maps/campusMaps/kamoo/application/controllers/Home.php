<?php
	class home extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('session');
		}

		public function about()
		{		
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('about');
		}
		
		public function team()
		{		
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('team');
		}
		
		public function maps()
		{		
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('home');
		}
		
	
	}

?>