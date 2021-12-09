<?php

class Mitra_model extends CI_Model
{
	public function getDataMitra($id)
	{
		return $this->db->get('mitra')->result_array();
	}
}
?>