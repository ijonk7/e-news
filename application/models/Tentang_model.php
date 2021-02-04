<?php

class Tentang_model extends CI_Model {

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
}
