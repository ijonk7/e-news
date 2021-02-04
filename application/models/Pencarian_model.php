<?php

class Pencarian_model extends CI_Model {
    
	public function pencarian($input)
	{
		$sql1 = $this->db->query('(SELECT * FROM teknologi WHERE judul LIKE \'%'.$input->kata_kunci.'%\' ORDER BY created_date DESC) UNION
        (SELECT * FROM travel WHERE judul LIKE \'%'.$input->kata_kunci.'%\' ORDER BY created_date DESC) UNION
        (SELECT * FROM automotif WHERE judul LIKE \'%'.$input->kata_kunci.'%\' ORDER BY created_date DESC) UNION
        (SELECT * FROM olahraga WHERE judul LIKE \'%'.$input->kata_kunci.'%\' ORDER BY created_date DESC);')->result_array();
        
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
