<?php

class Pengunjung_model extends CI_Model
{
	public function getDataPengunjung($id)
	{
		return $this->db->get('pengunjung')->result_array();
	}
}
?>