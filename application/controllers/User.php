<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index()
	{
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('dashboard/template/footer');
	}

	// DETAIL USER

	public function v_detail_user()
	{
		$data['pelanggan'] = $this->M_user->tampil_detail_user()->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/user/detail', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function v_tambah_detail_user()
	{
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/user/tambah_detail');
		$this->load->view('dashboard/template/footer');
	}

	public function tambah_detail_user()
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

		$this->M_user->tambah_detail_user($data,'pelanggan');
		redirect('User/v_detail_user');
	}

	public function hapus_detail_user($id)
	{
		$where = array('id' => $id);
		$this->M_user->hapus_detail_user($where,'pelanggan');
		redirect('User/v_detail_user');
	}

	public function v_edit_detail_user($id)
	{
		$where = array('id' => $id);
		$data['pelanggan'] = $this->M_user->edit_detail_user($where, 'pelanggan')->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/user/edit_detail', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function edit_detail_user()
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
		$this->M_user->update_detail_user($where,$data,'pelanggan');
		redirect('User/v_detail_user');
	}

	// USER

	public function v_data_user()
	{
		$data['user'] = $this->M_user->tampil_data_user()->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/user/data', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function v_tambah_data_user()
	{
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/user/tambah_data');
		$this->load->view('dashboard/template/footer');
	}

	public function tambah_data_user()
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

		$this->M_user->tambah_data_user($data,'user');
		redirect('User/v_data_user');
	}

	public function hapus_data_user($id)
	{
		$where = array('id' => $id);
		$this->M_user->hapus_data_user($where,'user');
		redirect('User/v_data_user');
	}

	public function v_edit_data_user($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->M_user->edit_data_user($where, 'user')->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/user/edit_data', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function edit_data_user()
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
		$this->M_user->update_data_user($where,$data,'user');
		redirect('User/v_data_user');
	}

	// DATA MASKAPAI

	public function v_data_maskapai()
	{
		$data['maskapai'] = $this->M_user->tampil_data_maskapai()->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/maskapai/maskapai', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function v_tambah_data_maskapai()
	{
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/maskapai/tambah_maskapai');
		$this->load->view('dashboard/template/footer');
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

		$this->M_user->tambah_data_maskapai($data,'maskapai');
		redirect('User/v_data_maskapai');
	}

	public function hapus_data_maskapai($id)
	{
		$where = array('id' => $id);
		$this->M_user->hapus_data_maskapai($where,'maskapai');
		redirect('User/v_data_maskapai');
	}

	public function v_edit_data_maskapai($id)
	{
		$where = array('id' => $id);
		$data['maskapai'] = $this->M_user->edit_data_maskapai($where, 'maskapai')->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/maskapai/edit_maskapai', $data);
		$this->load->view('dashboard/template/footer');
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
		$this->M_user->update_data_maskapai($where,$data,'maskapai');
		redirect('User/v_data_maskapai');
	}

	// DATA PeSAWAT

	public function v_data_pesawat()
	{
		$data['pesawat'] = $this->M_user->tampil_data_pesawat()->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/maskapai/pesawat', $data);
		$this->load->view('dashboard/template/footer');
	}

	public function v_tambah_data_pesawat()
	{
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/maskapai/tambah_pesawat');
		$this->load->view('dashboard/template/footer');
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

		$this->M_user->tambah_data_pesawat($data,'pesawat');
		redirect('User/v_data_pesawat');
	}

	public function hapus_data_pesawat($id)
	{
		$where = array('id' => $id);
		$this->M_user->hapus_data_pesawat($where,'pesawat');
		redirect('User/v_data_pesawat');
	}

	public function v_edit_data_pesawat($id)
	{
		$where = array('id' => $id);
		$data['pesawat'] = $this->M_user->edit_data_pesawat($where, 'pesawat')->result();
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/maskapai/edit_pesawat', $data);
		$this->load->view('dashboard/template/footer');
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
		$this->M_user->update_data_pesawat($where,$data,'pesawat');
		redirect('User/v_data_pesawat');
	}

}
