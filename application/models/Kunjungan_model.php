<?php

class Kunjungan_model extends CI_Model
{
	public function getDataKunjungan($id)
	{
		return $this->db->get('kunjungan')->result_array();
	}
}
?>