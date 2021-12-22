<?php

class Mitra_model extends CI_Model
{
	public function getDataMitra()
	{
		return $this->db->get('mitra');
	}

	//FUNCTION TO ADD MITRA
	public function tambah_mitra($data)
    {
        return $this->db->insert('covidcheckin', $data);
    }
}
?>