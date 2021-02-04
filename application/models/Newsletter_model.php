<?php

class Newsletter_model extends CI_Model {
    
	public function simpan($input)
	{
        $data = array(
            'email' => $input->newsletter,
            'status' => 1,
            'created_date' => date("Y-m-d"),
            'created_by' => '',
            'update_by' => ''
        );

        return $this->db->insert('newsletter', $data);
    }
}
