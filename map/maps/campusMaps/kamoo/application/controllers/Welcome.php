<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pros_model');
		$this->load->library('session');
	}

	public function index()
	{
			//var_dump($this->session->userdata());
			//var_dump($_COOKIE);
			//echo"<BR>";var_dump($_SESSION);echo "<br>";
		if(!isset($_POST["login"]))goto insidepage;
		insidepage:
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('username', 'Email', 'required|trim', 
			array('required' => 'You MUST provide an email.'));
		//$this->form_validation->set_rules('password', 'Password', 'required|trim|md5', array('required' => 'You MUST provide your password.' ));
		$this->form_validation->set_rules('password', 'Password', 'required|trim|callback_validate_user',
			array
			(
				'required' => 'You MUST provide your password.' ,
				'validate_user'=>"Wrong email or password"
			)
		);

		//echo"BR";var_dump($_SESSION);
		if($this->form_validation->run() == FALSE && $this->__loggedin() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('welcome_message');
		}

		else
		{
			$tmp = 	$this->session->userdata();		
			$gid = $tmp["gid"];
			$this->load->view('templates/header1');
			$this->load->view('templates/menu');
			$this->load->view('aboutjkuat');
			//exit();
		}
		
	}

	public function validate_user()
	{
		if(($gid = $this->pros_model->can_login()) !== FALSE)
		{
			setcookie("email", $_POST["username"]);
			$this->session->set_userdata("email",$_POST["username"]);
			$this->session->set_userdata("loggedin",TRUE); 
			$this->session->set_userdata("gid",$gid[0][0]); 
			$this->session->set_userdata("uName",sprintf("%s", $gid[1])); 
			return true;
		}

		else
		{
			$this->form_validation->set_message('validate_user', 'Wrong Email or Password!');
			return false;
		}
	}
	
	public function __loggedin()
	{
			//var_dump($this->session->userdata());	exit();
		//if(isset($_COOKIE["email"]))return TRUE;
		if(isset($_SESSION["email"]) && $_SESSION["loggedin"] == TRUE)return TRUE;
		else return FALSE;
	}

	public function search()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('interest', 'Field of Interest', 'required', 
			array('required' => 'You MUST specify your field of interest.' ));
		$this->form_validation->set_rules('category', 'Level of Expertise', 'required', 
			array('required' => 'You MUST indicate the level of expertise you are searching for.' ));
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('home');
		}

		else
		{
			$interest = $this->input->post('interest');
			$category = $this->input->post('category');
			
			$data['pros'] = $this->pros_model->get_pro($category, $interest);

			if(empty($data['pros']))
			{
				$this->load->view('templates/header');
				$this->load->view('templates/menu');
				$this->load->view('pros/notfound');
				$this->load->view('home');
			}
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('xpertriates', $data);
		}
		//echo "in search";exit();
	}
	
	public function admintab()
	{
		$data['pros'] = $this->pros_model->get_all_pro();

		if(empty($data['pros']))
		{
			show_404();
		}
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('xpertriates_all', $data);
		//echo "in search";exit();
	}
	
	public function droppro()
	{
		$this->pros_model->delete_pro($_GET["email"]);
		header("location: ".base_url('index.php/welcome/admintab'));
	}
	
	public function report()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('to', 'to(date)', 'required', 
			array('required' => 'You MUST specify to(date).' ));
		$this->form_validation->set_rules('from', 'from(date)', 'required', 
			array('required' => 'You MUST specify from(date).' ));
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('report/report');
		}
		else
		{
			$from = $this->input->post('from');
			$to = $this->input->post('to');
			
			$data['users'] = $this->pros_model->get_reg_users($from, $to);

			if(empty($data['users']))
			{
				$this->load->view('templates/header');
				$this->load->view('templates/menu');
				$this->load->view('report/notfound');
				$this->load->view('report/report');
			}
				#$this->load->view('templates/header');
				#$this->load->view('templates/menu');
				$this->load->view('report/reported', $data);
				#$this->load->view('report/report');
			
		}
	}

	public function logout()
	{
		setcookie("email", "", -3600);
		{unset($_SESSION["email"]);
		unset($_SESSION["loggedin"]);}
		//$this->index();test@test.com
		$loc = site_url('welcome/index');
		header("location:  $loc");
	}
}
