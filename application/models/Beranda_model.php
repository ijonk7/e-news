<?php

class Beranda_model extends CI_Model {
    
	public function artikel_random()
	{
		$sql1 = $this->db->query('(SELECT * FROM teknologi ORDER BY created_date DESC LIMIT 3) UNION
		(SELECT * FROM travel ORDER BY created_date DESC LIMIT 3) UNION
		(SELECT * FROM automotif ORDER BY created_date DESC LIMIT 3) UNION
        (SELECT * FROM olahraga ORDER BY created_date DESC LIMIT 3);')->result_array();
        
        return $sql1;
    }
    
	public function total_artikel()
	{
		$sql2 = $this->db->query('SELECT (
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
        
        return $sql2;
    }
}
