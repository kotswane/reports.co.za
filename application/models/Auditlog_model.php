<?php
	class Auditlog_model extends CI_Model {
		
		public function save($data)
        {
                $this->db->insert('auditlog',$data);
				return $this->db->insert_id();
        }
	}
?>