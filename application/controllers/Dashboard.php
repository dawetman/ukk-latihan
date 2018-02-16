<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
	}

	public function index()
	{
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/index');
		$this->load->view('dashboard_admin/template/footer');
	}

	// DETAIL PELANGGAN

	public function v_detail_pelanggan()
	{
		$data['pelanggan'] = $this->M_dashboard->tampil_detail_pelanggan()->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/pelanggan/detail', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function v_tambah_detail_pelanggan()
	{
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/pelanggan/tambah_detail');
		$this->load->view('dashboard_admin/template/footer');
	}

	public function tambah_detail_pelanggan()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');

		$data = array
		(
			'name' => $name,
			'email' => $email,
			'gender' => $gender,
			'address' => $address,
			'phone' => $phone
		);

		$this->M_dashboard->tambah_detail_pelanggan($data,'pelanggan');
		redirect('User/v_detail_pelanggan');
	}

	public function hapus_detail_pelanggan($id)
	{
		$where = array('id' => $id);
		$this->M_dashboard->hapus_detail_pelanggan($where,'pelanggan');
		redirect('User/v_detail_pelanggan');
	}

	public function v_edit_detail_pelanggan($id)
	{
		$where = array('id' => $id);
		$data['pelanggan'] = $this->M_dashboard->edit_detail_pelanggan($where, 'pelanggan')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/pelanggan/edit_detail', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_detail_pelanggan()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');

		$data = array
		(
			'name' => $name,
			'email' => $email,
			'gender' => $gender,
			'address' => $address,
			'phone' => $phone
		);

		$where = array('id' => $id);
		$this->M_dashboard->update_detail_pelanggan($where,$data,'pelanggan');
		redirect('User/v_detail_pelanggan');
	}

	// DATA PELANGGAN

	public function v_data_pelanggan()
	{
		$data['user'] = $this->M_dashboard->tampil_data_pelanggan()->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/pelanggan/data', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function v_tambah_data_pelanggan()
	{
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/pelanggan/tambah_data');
		$this->load->view('dashboard_admin/template/footer');
	}

	public function tambah_data_pelanggan()
	{
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array
		(
			'email' => $email,
			'username' => $username,
			'password' => $password
		);

		$this->M_dashboard->tambah_data_pelanggan($data,'user');
		redirect('User/v_data_pelanggan');
	}

	public function hapus_data_pelanggan($id)
	{
		$where = array('id' => $id);
		$this->M_dashboard->hapus_data_pelanggan($where,'user');
		redirect('User/v_data_pelanggan');
	}

	public function v_edit_data_pelanggan($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->M_dashboard->edit_data_pelanggan($where, 'user')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/pelanggan/edit_data', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_data_pelanggan()
	{
		$id = $this->input->post('id');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array
		(
			'email' => $email,
			'username' => $username,
			'password' => $password
		);

		$where = array('id' => $id);
		$this->M_dashboard->update_data_pelanggan($where,$data,'user');
		redirect('User/v_data_pelanggan');
	}

	// DATA MASKAPAI

	public function v_data_maskapai()
	{
		$data['maskapai'] = $this->M_dashboard->tampil_data_maskapai()->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/maskapai', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function v_tambah_data_maskapai()
	{
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/tambah_maskapai');
		$this->load->view('dashboard_admin/template/footer');
	}

	public function tambah_data_maskapai()
	{
		$name = $this->input->post('name');
		$seat = $this->input->post('seat');
		$detail = $this->input->post('detail');

		$data = array
		(
			'name' => $name,
			'seat' => $seat,
			'detail' => $detail
		);

		$this->M_dashboard->tambah_data_maskapai($data,'maskapai');
		redirect('User/v_data_maskapai');
	}

	public function hapus_data_maskapai($id)
	{
		$where = array('id' => $id);
		$this->M_dashboard->hapus_data_maskapai($where,'maskapai');
		redirect('User/v_data_maskapai');
	}

	public function v_edit_data_maskapai($id)
	{
		$where = array('id' => $id);
		$data['maskapai'] = $this->M_dashboard->edit_data_maskapai($where, 'maskapai')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/edit_maskapai', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_data_maskapai()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$seat = $this->input->post('seat');
		$detail = $this->input->post('detail');

		$data = array
		(
			'name' => $name,
			'seat' => $seat,
			'detail' => $detail
		);

		$where = array('id' => $id);
		$this->M_dashboard->update_data_maskapai($where,$data,'maskapai');
		redirect('User/v_data_maskapai');
	}

	// DATA PeSAWAT

	public function v_data_pesawat()
	{
		$data['pesawat'] = $this->M_dashboard->tampil_data_pesawat()->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/pesawat', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function v_tambah_data_pesawat()
	{
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/tambah_pesawat');
		$this->load->view('dashboard_admin/template/footer');
	}

	public function tambah_data_pesawat()
	{
		$code = $this->input->post('code');
		$name = $this->input->post('name');
		$detail = $this->input->post('detail');

		$data = array
		(
			'code' => $code,
			'name' => $name,
			'detail' => $detail
		);

		$this->M_dashboard->tambah_data_pesawat($data,'pesawat');
		redirect('User/v_data_pesawat');
	}

	public function hapus_data_pesawat($id)
	{
		$where = array('id' => $id);
		$this->M_dashboard->hapus_data_pesawat($where,'pesawat');
		redirect('User/v_data_pesawat');
	}

	public function v_edit_data_pesawat($id)
	{
		$where = array('id' => $id);
		$data['pesawat'] = $this->M_dashboard->edit_data_pesawat($where, 'pesawat')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/edit_pesawat', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_data_pesawat()
	{
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$name = $this->input->post('name');
		$detail = $this->input->post('detail');

		$data = array
		(
			'code' => $code,
			'name' => $name,
			'detail' => $detail
		);

		$where = array('id' => $id);
		$this->M_dashboard->update_data_pesawat($where,$data,'pesawat');
		redirect('User/v_data_pesawat');
	}

	// RUTE MASKAPAI

	public function v_rute_maskapai()
	{
		$data['rute'] = $this->M_dashboard->tampil_rute_maskapai()->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/rute', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function v_tambah_rute_maskapai()
	{
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/tambah_rute');
		$this->load->view('dashboard_admin/template/footer');
	}

	public function tambah_rute_maskapai()
	{
		$name = $this->input->post('name');
		$route_from = $this->input->post('route_from');
		$route_to = $this->input->post('route_to');
		$departure = $this->input->post('departure');
		$arrival = $this->input->post('arrival');
		$price = $this->input->post('price');


		$data = array
		(
			'name' => $name,
			'route_from' => $route_from,
			'route_to' => $route_to,
			'departure' => $departure,
			'arrival' => $arrival,
			'price' => $price
		);

		$this->M_dashboard->tambah_rute_maskapai($data,'rute');
		redirect('User/v_rute_maskapai');
	}

	public function hapus_rute_maskapai($id)
	{
		$where = array('id' => $id);
		$this->M_dashboard->hapus_rute_maskapai($where,'rute');
		redirect('User/v_rute_maskapai');
	}

	public function v_edit_rute_maskapai($id)
	{
		$where = array('id' => $id);
		$data['rute'] = $this->M_dashboard->edit_rute_maskapai($where, 'rute')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/edit_rute', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_rute_maskapai()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$route_from = $this->input->post('route_from');
		$route_to = $this->input->post('route_to');
		$departure = $this->input->post('departure');
		$arrival = $this->input->post('arrival');
		$price = $this->input->post('price');

		$data = array
		(
			'name' => $name,
			'route_from' => $route_from,
			'route_to' => $route_to,
			'departure' => $departure,
			'arrival' => $arrival,
			'price' => $price
		);

		$where = array('id' => $id);
		$this->M_dashboard->update_rute_maskapai($where,$data,'rute');
		redirect('User/v_rute_maskapai');
	}

	// DETAIL USER

	public function v_detail_user()
	{
		$data['pelanggan'] = $this->M_dashboard->tampil_detail_user()->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/detail/detail_user', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

}
