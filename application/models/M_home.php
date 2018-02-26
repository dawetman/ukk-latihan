<?php 

class M_home extends CI_Model{

	function route_from() 
	{
		$this->db->select("city, id_route_from");
		$this->db->from('rute');
		$this->db->distinct("city");
		$this->db->join('bandara', 'rute.id_route_from = bandara.id_bandara');
		return $this->db->get()->result();
	}

	function route_to() 
	{
		$this->db->select("city, id_route_to");
		$this->db->from('rute');
		$this->db->distinct("city");
		$this->db->join('bandara', 'rute.id_route_to = bandara.id_bandara');
		return $this->db->get()->result();
	}

	function flight_search() 
	{
		$this->db->select('*, maskapai.name as maskapai_name, maskapai.class as class');
		$this->db->from('rute');
		$this->db->where('id_route_from', $this->input->get('id_route_from'));
		$this->db->where('id_route_to', $this->input->get('id_route_to'));
		$this->db->join('maskapai', 'rute.id_maskapai = maskapai.id_maskapai');
		return $this->db->get()->result();
	}

	function flight_from() 
	{
		$this->db->select('*, bandara.city as city, bandara.name as name');
		$this->db->from('rute');
		$this->db->where('id_route_from', $this->input->get('id_route_from'));
		$this->db->where('id_route_to', $this->input->get('id_route_to'));
		$this->db->join('bandara', 'rute.id_route_from = bandara.id_bandara');
		return $this->db->get()->result();
	}

	function flight_to() 
	{
		$this->db->select('*, bandara.city as city, bandara.name as name');
		$this->db->from('rute');
		$this->db->where('id_route_from', $this->input->get('id_route_from'));
		$this->db->where('id_route_to', $this->input->get('id_route_to'));
		$this->db->join('bandara', 'rute.id_route_to = bandara.id_bandara');
		return $this->db->get()->result();
	}

	function flight_detail($id_rute) 
	{
		$this->db->select("*, maskapai.name as maskapai_name, maskapai.class as maskapai_class, pesawat.name as pesawat_name");
		$this->db->from('rute');
		$this->db->where('id_rute', $id_rute);
		$this->db->join('bandara', 'rute.id_route_to = bandara.id_bandara');
		$this->db->join('maskapai', 'rute.id_maskapai = maskapai.id_maskapai');
		$this->db->join('pesawat', 'maskapai.id_pesawat = pesawat.id_pesawat');
		return $this->db->get()->row();
	}

	function flight_detail_from($id_rute) 
	{
		$this->db->select("*, bandara.city as city, bandara.name as name");
		$this->db->from('rute');
		$this->db->where('id_rute', $id_rute);
		$this->db->join('bandara', 'rute.id_route_from = bandara.id_bandara');
		return $this->db->get()->row();
	}

	function flight_detail_to($id_rute) 
	{
		$this->db->select("*, bandara.city as city, bandara.name as name");
		$this->db->from('rute');
		$this->db->where('id_rute', $id_rute);
		$this->db->join('bandara', 'rute.id_route_to = bandara.id_bandara');
		return $this->db->get()->row();
	}

}