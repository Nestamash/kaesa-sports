<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {

	/**
	 * *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pros_model');
	}
	
	public function allplaces()
	{
		$this->load->database();
		$query = $this->db->get('maps');
		$result = $query->result_array();
		$placetypes = array();
		foreach($result as $ca=>$rol)
		{
			if(!in_array($rol['name'], $placetypes))$placetypes[] = $rol['name'];
		}
		sort($placetypes);
		echo json_encode($placetypes);
		exit();
	}
	
	public function placetypes()
	{
		$this->load->database();
		$query = $this->db->get('maps');
		$result = $query->result_array();
		$placetypes = array();
		foreach($result as $ca=>$rol)
		{
			if(!in_array($rol['type'], $placetypes))$placetypes[] = $rol['type'];
		}
		sort($placetypes);
		echo json_encode($placetypes);
		exit();
	}
	
	public function placetypesordinates($placetype)
	{
		$this->load->database();
		$query = $this->db->get_where('maps',array("type"=>$placetype ));
		$result = $query->result_array();
		$placetypes = array();
		foreach($result as $ca=>$rol)
		{
			$placetypes[$rol["name"]] = array($rol['lat'],$rol['lng']);
		}
		//var_dump($placetypes);exit();
		//sort($placetypes);
		echo json_encode($placetypes);
		exit();
	}
	
	public function fromto($from, $to)
	{
		$this->load->database();
		$query = $this->db->get_where('maps',array("name"=>$from ));
		$result = $query->result_array();
		$from = array();
		foreach($result as $ca=>$rol)
		{
			$from[$rol["name"]] = array($rol['lat'],$rol['lng']);
		}
		/*var_dump($from);var_dump($to);
		echo $from;
		echo "<BR>echo<BR>";*/
		$query = $this->db->get_where('maps',array("name"=>$to ));
		$result = $query->result_array();
		$to = array();
		foreach($result as $ca=>$rol)
		{
			$to[$rol["name"]] = array($rol['lat'],$rol['lng']);
		}
		
		foreach($to as $ca=>$rol)$from[$ca] = $rol;
		//var_dump($from);exit();
		echo json_encode($from);
		exit();
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
}
