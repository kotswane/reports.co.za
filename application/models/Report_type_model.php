<?php
	class Report_type_model extends CI_Model {
		
		public function list_reports_type()
        {
                $query = $this->db->get('report_type');
                return $query->result();
        }
	}
?>