<?php 

class M_dashboard extends CI_Model{

	// DETAIL USER

	function tampil_detail_pelanggan()
	{
		return $this->db->get('pelanggan');
	}

	function tambah_detail_pelanggan($data, $pelanggan)
	{
		$this->db->insert('pelanggan', $data);
	}

	function hapus_detail_pelanggan($where, $pelanggan)
	{
		$this->db->where($where);
		$this->db->delete('pelanggan');
	}

	function edit_detail_pelanggan($where, $pelanggan)
	{
		return $this->db->get_where('pelanggan', $where);
	}

	function update_detail_pelanggan($where, $data, $pelanggan)
	{
		$this->db->where($where);
		$this->db->update('pelanggan', $data);
	}

	// DATA USER

	function tampil_data_pelanggan()
	{
		return $this->db->get('user');
	}

	function tambah_data_pelanggan($data, $user)
	{
		$this->db->insert('user', $data);
	}

	function hapus_data_pelanggan($where, $user)
	{
		$this->db->where($where);
		$this->db->delete('user');
	}

	function edit_data_pelanggan($where, $user)
	{
		return $this->db->get_where('user', $where);
	}

	function update_data_pelanggan($where, $data, $user)
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

	// DATA PESAWAT

	function tampil_rute_maskapai()
	{
		return $this->db->get('rute');
	}

	function tambah_rute_maskapai($data, $rute)
	{
		$this->db->insert('rute', $data);
	}

	function hapus_rute_maskapai($where, $rute)
	{
		$this->db->where($where);
		$this->db->delete('rute');
	}

	function edit_rute_maskapai($where, $rute)
	{
		return $this->db->get_where('rute', $where);
	}

	function update_rute_maskapai($where, $data, $rute)
	{
		$this->db->where($where);
		$this->db->update('rute', $data);
	}

	// DETAIL USER

	function tampil_detail_user()
	{
		return $this->db->get('pelanggan');
	}

}