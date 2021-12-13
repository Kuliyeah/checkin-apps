<?php

class Pengunjung_model extends CI_Model
{
	public function getDataPengunjung()
	{
		return $this->db->get('pengunjung');
	}
}
?>