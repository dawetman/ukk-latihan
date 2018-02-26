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

	// DATA ADMIN

	function tampil_data_admin()
	{
		return $this->db->get('admin');
	}

	function tambah_data_admin($data, $admin)
	{
		$this->db->insert('admin', $data);
	}

	function hapus_data_admin($where, $admin)
	{
		$this->db->where($where);
		$this->db->delete('admin');
	}

	function edit_data_admin($where, $admin)
	{
		return $this->db->get_where('admin', $where);
	}

	function update_data_admin($where, $data, $admin)
	{
		$this->db->where($where);
		$this->db->update('admin', $data);
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

	// DATA BANDARA

	function tampil_data_bandara()
	{
		return $this->db->get('bandara');
	}

	function tambah_data_bandara($data, $bandara)
	{
		$this->db->insert('bandara', $data);
	}

	function hapus_data_bandara($where, $bandara)
	{
		$this->db->where($where);
		$this->db->delete('bandara');
	}

	function edit_data_bandara($where, $bandara)
	{
		return $this->db->get_where('bandara', $where);
	}

	function update_data_bandara($where, $data, $bandara)
	{
		$this->db->where($where);
		$this->db->update('bandara', $data);
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

	// RUTE MASKAPAI

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

	function data_rute()
	{
		$this->db->select('*');
		$this->db->from('bandara');
		$this->db->distinct('id_bandara');
		return $this->db->get()->result();
	}

	// DETAIL USER

	function tampil_admin()
	{
		return $this->db->get('admin');
	}

	function edit_admin($where, $admin)
	{
		return $this->db->get_where('admin', $where);
	}

	function update_admin($where, $data, $admin)
	{
		$this->db->where($where);
		$this->db->update('admin', $data);
	}

	// PESAN

	function tampil_pesan()
	{
		return $this->db->get('pesan');
	}

	function tambah_pesan($data, $pesan)
	{
		$this->db->insert('pesan', $data);
	}

	function hapus_pesan($where, $pesan)
	{
		$this->db->where($where);
		$this->db->delete('pesan');
	}

	function update_pesan($where, $data, $pesan)
	{
		$this->db->where($where);
		$this->db->update('pesan', $data);
	}

	function edit_pesan($where, $pesan)
	{
		return $this->db->get_where('pesan', $where);
	}

}