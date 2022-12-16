<?php
	class Report_model extends CI_Model {
		
		public function list_reports()
        {
                $query = $this->db->get('report');
                return $query->result();
        }
	}
?>