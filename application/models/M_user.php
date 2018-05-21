<?php 

class M_user extends CI_Model{

	// DATA DIRI

	function tampil_data_diri($where)
	{
		return $this->db->get_where('pelanggan', $where);
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

	function tampil_user($where)
	{
		return $this->db->get_where('user', $where);
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

	// RESERVASI

	function tampil_reservasi($where)
	{
		return $this->db->get_where('reservasi', $where);
	}

	function hapus_reservasi($where, $reservasi)
	{
		$this->db->where($where);
		$this->db->delete('reservasi');
	}

	function edit_reservasi($where, $reservasi)
	{
		return $this->db->get_where('reservasi', $where);
	}

	function update_reservasi($where, $data, $reservasi)
	{
		$this->db->where($where);
		$this->db->update('reservasi', $data);
	}

}