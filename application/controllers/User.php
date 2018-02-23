<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('M_user');
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
		$data['pelanggan'] = $this->M_user->tampil_data_diri()->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/data_diri/data_diri', $data);
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

		$where = array('id_pelanggan' => $id_pelanggan);
		$this->M_user->update_data_diri($where,$data,'pelanggan');
		redirect('User/v_data_diri');
	}

	// DETAIL

	public function v_user()
	{
		$data['user'] = $this->M_user->tampil_user()->result();
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

}