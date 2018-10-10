<?php
	class Admin extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('pros_model');
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');
		}

		public function create()
		{
			
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class = "error">', '</div>');

			$this->form_validation->set_rules('firstname', 'Firstname', 'required|min_length[3]|max_length[18]', 
				array('required' => 'The Firstname is required', 'min_length' => 'Too few letters for a name.', 'max_length' => 'Too many letters for a name.' ));
			$this->form_validation->set_rules('surname', 'Surname', 'required', 'required|min_length[3]|max_length[18]', 
				array('required' => 'The Firstname is required', 'min_length' => 'Too few letters for a name.', 'max_length' => 'Too many letters for a name.' ));
			$this->form_validation->set_rules('age', 'Age', 'required|numeric', 
				array('required' => 'Age is required.', 'numeric' => 'Age must be numeric.'));
			$this->form_validation->set_rules('contact', 'Phone No.', 'required|numeric',
				array('required' => 'Phone Number is required', 'numeric' => 'Phone No. must be numeric.'));
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('office', 'Office', 'required');
			$this->form_validation->set_rules('availability', 'Availability', 'required', 
				array('required' => 'You must indicate the time you are available for consultations.'));
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('specialization', 'Field of interest', 'required');
			//$this->form_validation->set_rules('image', );

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('templates/menu');
				$this->load->view('pros/create');
			}

			else
			{	
				if($this->pros_model->set_pro() == FALSE)
				{
					$this->load->view('templates/header');
					$this->load->view('templates/menu');
					$this->load->view('pros/create');
				}else
				{					
				$this->load->view('templates/header');
				$this->load->view('templates/menu');
				$this->load->view('pros/success');
				}
			}
		}
	}

?>