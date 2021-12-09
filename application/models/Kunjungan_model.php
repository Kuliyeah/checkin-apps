<?php

class Kunjungan_model extends CI_Model
{
	public function getDataKunjungan()
	{
		return $this->db->get('kunjungan')->result_array();
	}
}
?>