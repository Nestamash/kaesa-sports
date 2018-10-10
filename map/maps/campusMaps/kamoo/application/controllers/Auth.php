<?php
	class Auth extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('auth_model');
		}

		public function register()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class = "error">', '</div>');

			$this->form_validation->set_rules('firstname', 'Firstname', 'required|min_length[3]|max_length[18]', 
				array('required' => 'The Firstname is required', 'min_length' => 'Too few letters for a name.', 'max_length' => 'Too many letters for a name.' ));
			$this->form_validation->set_rules('lastname', 'Lastname', 'required', 'required|min_length[3]|max_length[18]', 
				array('required' => 'The Firstname is required', 'min_length' => 'Too few letters for a name.', 'max_length' => 'Too many letters for a name.' ));
			/*$this->form_validation->set_rules('contact', 'Contact', 'required|numeric', 
				array('required' => 'Contact is required.', 'numeric' => 'Contact must be numeric.'));*/
			$this->form_validation->set_rules('contact', 'Phone No.', 'required|numeric',
				array('required' => 'Phone Number is required', 'numeric' => 'Phone No. must be numeric.'));
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			/*$this->form_validation->set_rules('availability', 'Availability', 'required', 
				array('required' => 'You must indicate the time you are available for consultations.'));/**/
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', 
						array(
							'required'      => 'You have not provided %s.',
							'is_unique'     => 'This %s already exists.'
						)
						);
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirmpassword', 'Password Confirmation', 'required');
			$this->form_validation->set_rules('confirmpassword', 'Passwords', 'callback_matching_passwords');
			//$this->form_validation->set_rules('image', );
			
		
				
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/header');
				//$this->load->view('templates/outMenu');
				$this->load->view('auth/register');
			}

			else
			{	
				$this->auth_model->__register();		
				$this->load->view('templates/header');
				/*$this->load->view('templates/menu');*/
				$this->load->view('auth/regsuccess');
			}
		}
		
		public function matching_passwords()
		{
			$this->form_validation->set_message('matching_passwords', 'Passwords don\'t match');
			if($_POST["password"] !== $_POST["confirmpassword"])return FALSE;
			else return TRUE;
		}
	}

?>
