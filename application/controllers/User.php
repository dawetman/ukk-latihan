<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('M_user');

		if($this->session->userdata('status') != "user")
		{
			redirect(base_url("Login"));
		}
	}

	public function index()
	{
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('dashboard/template/footer');
	}

	// DATA DIRI

	public function v_data_diri()
	{
		$where = array
		(
			'id_user' => $this->session->userdata('id_user')
		);
		$data['pelanggan'] = $this->M_user->tampil_data_diri($where)->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/data_diri/data_diri', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function v_more_data_diri($id_pelanggan)
	{
		$where = array('id_pelanggan' => $id_pelanggan);
		$data['pelanggan'] = $this->M_user->edit_data_diri($where, 'pelanggan')->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/data_diri/more_data_diri', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function v_tambah_data_diri()
	{
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/data_diri/tambah_data_diri');
		$this->load->view('dashboard/template/footer');
	}

	public function tambah_data_diri()
	{
		$id_user = $this->input->post('id_user');
		$id_card = $this->input->post('id_card');
		$email = $this->input->post('email');
		$name_f = $this->input->post('name_f');
		$name_b = $this->input->post('name_b');
		$gender = $this->input->post('gender');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$city = $this->input->post('city');
		$country = $this->input->post('country');
		$zip = $this->input->post('zip');
		$alias = $this->input->post('alias');

		$data = array
		(
			'id_user' => $id_user,
			'id_card' => $id_card,
			'email' => $email,
			'name_f' => $name_f,
			'name_b' => $name_b,
			'gender' => $gender,
			'address' => $address,
			'phone' => $phone,
			'city' => $city,
			'country' => $country,
			'zip' => $zip,
			'alias' => $alias
		);

		$this->M_user->tambah_data_diri($data,'pelanggan');
		redirect('User/v_data_diri');
	}

	public function hapus_data_diri($id_pelanggan)
	{
		$where = array('id_pelanggan' => $id_pelanggan);
		$this->M_user->hapus_data_diri($where,'pelanggan');
		redirect('User/v_data_diri');
	}

	public function v_edit_data_diri($id_pelanggan)
	{
		$where = array('id_pelanggan' => $id_pelanggan);
		$data['pelanggan'] = $this->M_user->edit_data_diri($where, 'pelanggan')->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/data_diri/edit_data_diri', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function edit_data_diri()
	{
		$id_pelanggan = $this->input->post('id_pelanggan');
		$id_card = $this->input->post('id_card');
		$email = $this->input->post('email');
		$name_f = $this->input->post('name_f');
		$name_b = $this->input->post('name_b');
		$gender = $this->input->post('gender');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$city = $this->input->post('city');
		$country = $this->input->post('country');
		$zip = $this->input->post('zip');
		$alias = $this->input->post('alias');

		$data = array
		(
			'id_card' => $id_card,
			'email' => $email,
			'name_f' => $name_f,
			'name_b' => $name_b,
			'gender' => $gender,
			'address' => $address,
			'phone' => $phone,
			'city' => $city,
			'country' => $country,
			'zip' => $zip,
			'alias' => $alias
		);

		$where = array('id_pelanggan' => $id_pelanggan);
		$this->M_user->update_data_diri($where,$data,'pelanggan');
		redirect('User/v_data_diri');
	}

	// DETAIL

	public function v_user()
	{
		$where = array
		(
			'id_user' => $this->session->userdata('id_user')
		);
		$data['user'] = $this->M_user->tampil_user($where)->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/detail/detail', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function v_edit_user($id_user)
	{
		$where = array('id_user' => $id_user);
		$data['user'] = $this->M_user->edit_user($where, 'user')->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/detail/edit_detail', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function edit_user()
	{
		$id_user = $this->input->post('id_user');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$data = array
		(
			'email' => $email,
			'username' => $username,
			'password' => $password
		);

		$where = array('id_user' => $id_user);
		$this->M_user->update_user($where,$data,'user');
		redirect('User/v_user');
	}

	// RESERVASI

	public function v_reservasi()
	{
		$where = array
		(
			'id_user' => $this->session->userdata('id_user')
		);
		$data['reservasi'] = $this->M_user->tampil_reservasi($where)->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/reservasi/reservasi', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function v_more_reservasi($id_user)
	{
		$where = array('id_pelanggan' => $id_pelanggan);
		$data['reservasi'] = $this->M_user->edit_reservasi($where, 'reservasi')->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/reservasi/more_reservasi', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function v_edit_reservasi($id_reservasi)
	{
		$where = array('id_reservasi' => $id_reservasi);
		$data['reservasi'] = $this->M_user->edit_reservasi($where, 'reservasi')->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/reservasi/edit_reservasi', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function hapus_reservasi($id_reservasi)
	{
		$where = array('id_reservasi' => $id_reservasi);
		$this->M_user->hapus_reservasi($where,'reservasi');
		redirect('Dashboard/v_reservasi');
	}

	public function edit_reservasi()
	{
		$id_reservasi = $this->input->post('id_reservasi');
		$status = $this->input->post('status');

		$data = array
		(
			'status' => $status
		);

		$where = array('id_reservasi' => $id_reservasi);
		$this->M_user->update_reservasi($where,$data,'reservasi');
		redirect('Dashboard/v_reservasi/');
	}

}