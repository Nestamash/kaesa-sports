<?php
	class Auth_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		/*public function get_pro($title = FALSE)
		{
			if( $title === FALSE )
			{
				$query = $this->db->get('pros');
				return $query->result_array();
			}

			$query = $this->db->get_where('pros', array('title' => $title));
			return $query->result_array();
		}
	*/
		public function __register()
		{
			$data = array(
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'email' => $this->input->post('email'),
					'gender' => $this->input->post('gender'),
					'contact' => $this->input->post('contact'),
					'password' => md5($this->input->post('password')),
					'regdate'=>date('y-m-d')
				);
			#$this->db->insert('users', $data);
			#echo "<pre>";var_dump($data);exit();
			return $this->db->insert('users', $data);
		}
		public function set_pro()
		{
			$data = array(
					'firstname' => $this->input->post('firstname'),
					'surname' => $this->input->post('surname'),
					'othername' => $this->input->post('othername'),
					'title' => $this->input->post('title'),
					'age' => $this->input->post('age'),
					'office' => $this->input->post('office'),
					'specialization' => $this->input->post('specialization'),
					'availability' => $this->input->post('availability'),
					'contact' => $this->input->post('contact'),
					'email' => $this->input->post('email'),
					'image' => $this->input->post('image'),
					'gender' => $this->input->post('gender')
				);

			return $this->db->insert('pros', $data);
		}

		public function can_login()
		{
			$this->db->where('username', $this->input->post('username'));
			$this->db->where('password', md5($this->input->post('password')));
			$query = $this->db->get('users');
			
			if ($query->num_rows() == 1) {
				return true;
			}			
			else
			{
				return false;
			}
		}
	}
