<?php

class Travel_model extends CI_Model {
    
	public function kategori()
	{
		$sql1 = $this->db->order_by('created_date', 'DESC')->get('travel')->result_array();
        
        return $sql1;
    }
    
	public function artikel_random()
	{
		$sql2 = $this->db->query('(SELECT * FROM teknologi ORDER BY created_date DESC LIMIT 3) UNION
		(SELECT * FROM travel ORDER BY created_date DESC LIMIT 3) UNION
		(SELECT * FROM automotif ORDER BY created_date DESC LIMIT 3) UNION
		(SELECT * FROM olahraga ORDER BY created_date DESC LIMIT 3);')->result_array();
        
        return $sql2;
    }
    
	public function total_artikel()
	{
		$sql3 = $this->db->query('SELECT (
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
        
        return $sql3;
    }
    
	public function artikel($id_artikel)
	{
		$sql4 = $this->db->where('id', $id_artikel)->get('travel')->row_array();
        
        return $sql4;
    }
    
	public function artikel_selanjutnya($id_artikel)
	{
		$sql5 = $this->db->where('id', $id_artikel+1)->get('travel')->row_array();
        
        return $sql5;
    }
    
	public function artikel_sebelumnya($id_artikel)
	{
		$sql6 = $this->db->where('id', $id_artikel-1)->get('travel')->row_array();
        
        return $sql6;
    }
    
	public function artikel_terkait()
	{
		$sql7 = $this->db->order_by('id', 'RANDOM')->limit(3)->get('travel')->result_array();
        
        return $sql7;
    }
}
