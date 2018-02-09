<?php 

class M_user extends CI_Model{

	// DETAIL USER

	function tampil_detail_user()
	{
		return $this->db->get('pelanggan');
	}

	function tambah_detail_user($data, $pelanggan)
	{
		$this->db->insert('pelanggan', $data);
	}

	function hapus_detail_user($where, $pelanggan)
	{
		$this->db->where($where);
		$this->db->delete('pelanggan');
	}

	function edit_detail_user($where, $pelanggan)
	{
		return $this->db->get_where('pelanggan', $where);
	}

	function update_detail_user($where, $data, $pelanggan)
	{
		$this->db->where($where);
		$this->db->update('pelanggan', $data);
	}

	// DATA USER

	function tampil_data_user()
	{
		return $this->db->get('user');
	}

	function tambah_data_user($data, $user)
	{
		$this->db->insert('user', $data);
	}

	function hapus_data_user($where, $user)
	{
		$this->db->where($where);
		$this->db->delete('user');
	}

	function edit_data_user($where, $user)
	{
		return $this->db->get_where('user', $where);
	}

	function update_data_user($where, $data, $user)
	{
		$this->db->where($where);
		$this->db->update('user', $data);
	}

	// DATA MASKAPAI

	function tampil_data_maskapai()
	{
		return $this->db->get('maskapai');
	}

	function tambah_data_maskapai($data, $maskapai)
	{
		$this->db->insert('maskapai', $data);
	}

	function hapus_data_maskapai($where, $maskapai)
	{
		$this->db->where($where);
		$this->db->delete('maskapai');
	}

	function edit_data_maskapai($where, $maskapai)
	{
		return $this->db->get_where('maskapai', $where);
	}

	function update_data_maskapai($where, $data, $maskapai)
	{
		$this->db->where($where);
		$this->db->update('maskapai', $data);
	}

	// DATA PESAWAT

	function tampil_data_pesawat()
	{
		return $this->db->get('pesawat');
	}

	function tambah_data_pesawat($data, $pesawat)
	{
		$this->db->insert('pesawat', $data);
	}

	function hapus_data_pesawat($where, $pesawat)
	{
		$this->db->where($where);
		$this->db->delete('pesawat');
	}

	function edit_data_pesawat($where, $pesawat)
	{
		return $this->db->get_where('pesawat', $where);
	}

	function update_data_pesawat($where, $data, $pesawat)
	{
		$this->db->where($where);
		$this->db->update('pesawat', $data);
	}

}