<?php

class Pengunjung_model extends CI_Model
{
	public function getDataPengunjung()
	{
		return $this->db->get('pengunjung');
	}

	// public function hapus_pengunjung($idPengunjung)
	// {
	// 	$this->db->where('idPengunjung', $idPengunjung);
	// 	$this->db->delete('pengunjung');
	// }

	public function getDataPengunjungById($idPengunjung)
	{
		$this->db->where('idPengunjung', $idPengunjung);
		return $this->db->get('pengunjung');
	}

	public function countRowsPengunjung()
	{
		return $this->db->get('pengunjung')->num_rows();
	}
}
