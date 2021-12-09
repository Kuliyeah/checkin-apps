<?php

class Admin_model extends CI_Model
{
	public function getByUsername($id)
	{
		$this->db->where('usernameAdmin', $id);
		return $this->db->get('admin');
	}
}
?>