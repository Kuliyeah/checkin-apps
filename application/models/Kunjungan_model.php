<?php

class Kunjungan_model extends CI_Model
{
	public function getDataKunjungan()
	{
		$this->db->select('*');
		$this->db->from('kunjungan');
		$this->db->join('pengunjung', 'pengunjung.idPengunjung = kunjungan.idPengunjung');
		$this->db->join('mitra', 'mitra.idMitra = kunjungan.idMitra');
		$query = $this->db->get();
		return $query;
	}

	public function countRowsKunjungan()
	{
		return $this->db->get('kunjungan')->num_rows();
	}
}
