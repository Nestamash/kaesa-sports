<?php
	class Pros_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
			$this->load->helper(array('form', 'url'));
		/*	
		*/
		}

		public function do_upload()
        {
                $config['upload_path']          = './armory/photos/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
				$this->upload->initialize($config);
				/*echo "<pre>";var_dump($_FILES);
				echo "<pre>";
				print_r($this->upload);
                if ( ! $this->upload->do_upload("image"))
                {
						var_dump( $this->upload->data());
						exit($this->upload->display_errors());
                        $error = array('error' => $this->upload->display_errors());
						return false;
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                       // $this->load->view('upload_success', $data);
						return $this->upload->data;
						//do_upload
                }*/
				//var_dump($_FILES);
				if(move_uploaded_file($_FILES["image"]["tmp_name"], $config['upload_path'].$_FILES["image"]["name"]))return $_FILES["image"]["name"];
				else return false;
        }
		
		public function get_pro($title = FALSE, $title1)
		{
			if( $title === FALSE )
			{
				$query = $this->db->get('pros');
				//var_dump($query->result_array());
				return $query->result_array();
			}

			//$query = $this->db->get_where('pros', array('title' => $title, 'specialization REGEXP', $title1));//specialization//, 'specialization LIKE', $title1
			$query = $this->db->get_where('pros', array('title' => $title));
			//$query = $this->db->having('pros',array('specialization', $title1));
	
			$result = $query->result_array();
			$newResults = array();
			//DEFINE("EOL","<BR>");
			foreach($result as $ca=>$rol)
			{
				$tmp = "_".$rol["specialization"];
				if(stripos($tmp, $title1))$newResults[] = $rol;
			}
			//var_dump($query->result_array());
			
			//return $query->result_array();
			return $newResults;
		}
		
		public function get_all_pro()
		{
			

			$query = $this->db->get('pros');
			
			$result = $query->result_array();
			$newResults = array();
			foreach($result as $ca=>$rol)
			{
				$tmp = "_".$rol["specialization"];
				$newResults[] = $rol;
			}
			return $newResults;
		}
		
		public function get_reg_users($from, $to)
		{
			$query = sprintf("SELECT Email, FirstName, LastName, Gender, Contact, RegDate FROM `users` WHERE `RegDate`<='%s' AND `RegDate`>='%s'", $to, $from);
			
			$query = $this->db->simple_query($query);
			if ( !$query )
			{
					$error = $this->db->error(); // Has keys 'code' and 'message'
					return false;
			}
			
			$result = $query;//->result_array();
			$newResults = array();
			foreach($result as $ca=>$rol)
			{
	
				$newResults[] = $rol;
			}
			return $newResults;
		}
		
		public function delete_pro($id)
		{
			if ( ! $this->db->simple_query('DELETE FROM `pros` WHERE `id`=\''.$id.'\''))
			{
					$error = $this->db->error(); // Has keys 'code' and 'message'
					return false;
			}
			return $true;
		}

		public function set_pro()
		{
			$ret = $this->do_upload();
			if($ret ==false)return false;
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
					'image' => $ret,
					'gender' => $this->input->post('gender')
				);

			return $this->db->insert('pros', $data);
		}

		public function can_login()
		{
			$this->db->where('email', $this->input->post('username'));
			$this->db->where('password', md5($this->input->post('password')));
			$query = $this->db->get('users');
			if ($query->num_rows() == 1) {
			$tmp = $query->result();
				return array(sprintf("%s__", $tmp[0]->Group),sprintf("%s %s", $tmp[0]->FirstName,$tmp[0]->LastName ));
			}			
			else
			{
				return false;
			}
		}
	}
