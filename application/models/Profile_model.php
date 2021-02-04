<?php

class Profile_model extends CI_Model {

	public function total_artikel()
	{
		$sql1 = $this->db->query('SELECT (
			SELECT COUNT(id)
			FROM teknologi
			) AS total_teknologi,
			(
			SELECT COUNT(id)
			FROM travel
			) AS total_travel,
			(
			SELECT COUNT(id)
			FROM automotif
			) AS total_automotif,
			(
			SELECT COUNT(id)
			FROM olahraga
			) AS total_olahraga')->result_array();
        
        return $sql1;
    }

	public function artikel_penulis()
	{        
		$sql2 = $this->db->query('(SELECT * FROM teknologi WHERE created_by=\'Muhammad Rizal\' ORDER BY created_date DESC) UNION
		(SELECT * FROM travel WHERE created_by=\'Muhammad Rizal\' ORDER BY created_date DESC) UNION
		(SELECT * FROM automotif WHERE created_by=\'Muhammad Rizal\' ORDER BY created_date DESC) UNION
        (SELECT * FROM olahraga WHERE created_by=\'Muhammad Rizal\' ORDER BY created_date DESC);')->result_array();
        
        return $sql2;
    }

	public function data_user()
	{
         return $this->db->where('id', $this->session->userdata('id_user'))->get('user')->row_array();
    }
}
