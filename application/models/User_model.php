<?php
	class User_model extends CI_Model {
		
		public function login($data)
        {
			$this->db->where('username', $data['username']);  
			$this->db->where('password', $data['password']);  
			$query = $this->db->get('users');  
	  
			if ($query->num_rows() == 1)  
			{  
				return $query->result();  
			} else {  
				return -1;  
			}  
        }
		
	}
?>