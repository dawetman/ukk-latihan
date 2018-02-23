<?php 

class M_user extends CI_Model{

	// DATA DIRI

	function tampil_data_diri()
	{
		return $this->db->get('pelanggan');
	}

	function tambah_data_diri($data, $pelanggan)
	{
		$this->db->insert('pelanggan', $data);
	}

	function hapus_data_diri($where, $pelanggan)
	{
		$this->db->where($where);
		$this->db->delete('pelanggan');
	}

	function edit_data_diri($where, $pelanggan)
	{
		return $this->db->get_where('pelanggan', $where);
	}

	function update_data_diri($where, $data, $pelanggan)
	{
		$this->db->where($where);
		$this->db->update('pelanggan', $data);
	}

	// DETAIL

	function tampil_user()
	{
		return $this->db->get('user');
	}

	function edit_user($where, $user)
	{
		return $this->db->get_where('user', $where);
	}

	function update_detail($where, $data, $user)
	{
		$this->db->where($where);
		$this->db->update('user', $data);
	}

}