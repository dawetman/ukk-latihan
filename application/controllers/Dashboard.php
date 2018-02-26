<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('M_dashboard');

		if($this->session->userdata('status') != "login")
		{
			redirect(base_url("Home"));
		}
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

	public function v_more_detail_pelanggan($id_pelanggan)
	{
		$where = array('id_pelanggan' => $id_pelanggan);
		$data['pelanggan'] = $this->M_dashboard->edit_detail_pelanggan($where, 'pelanggan')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/pelanggan/more_detail', $data);
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

		$this->M_dashboard->tambah_detail_pelanggan($data,'pelanggan');
		redirect('Dashboard/v_detail_pelanggan');
	}

	public function hapus_detail_pelanggan($id_pelanggan)
	{
		$where = array('id_pelanggan' => $id_pelanggan);
		$this->M_dashboard->hapus_detail_pelanggan($where,'pelanggan');
		redirect('Dashboard/v_detail_pelanggan');
	}

	public function v_edit_detail_pelanggan($id_pelanggan)
	{
		$where = array('id_pelanggan' => $id_pelanggan);
		$data['pelanggan'] = $this->M_dashboard->edit_detail_pelanggan($where, 'pelanggan')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/pelanggan/edit_detail', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_detail_pelanggan()
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
		$this->M_dashboard->update_detail_pelanggan($where,$data,'pelanggan');
		redirect('Dashboard/v_detail_pelanggan/');
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
		$password = md5($this->input->post('password'));

		$data = array
		(
			'email' => $email,
			'username' => $username,
			'password' => $password
		);

		$this->M_dashboard->tambah_data_pelanggan($data,'user');
		redirect('Dashboard/v_data_pelanggan');
	}

	public function hapus_data_pelanggan($id_user)
	{
		$where = array('id_user' => $id_user);
		$this->M_dashboard->hapus_data_pelanggan($where,'user');
		redirect('Dashboard/v_data_pelanggan');
	}

	public function v_edit_data_pelanggan($id_user)
	{
		$where = array('id_user' => $id_user);
		$data['user'] = $this->M_dashboard->edit_data_pelanggan($where, 'user')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/pelanggan/edit_data', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_data_pelanggan()
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
		$this->M_dashboard->update_data_pelanggan($where,$data,'user');
		redirect('Dashboard/v_data_pelanggan');
	}

	// DATA ADMIN

	public function v_data_admin()
	{
		$data['admin'] = $this->M_dashboard->tampil_data_admin()->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/admin/admin', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function v_tambah_data_admin()
	{
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/admin/tambah_admin');
		$this->load->view('dashboard_admin/template/footer');
	}

	public function tambah_data_admin()
	{
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = md5(md5($this->input->post('password')));

		$data = array
		(
			'email' => $email,
			'username' => $username,
			'password' => $password
		);

		$this->M_dashboard->tambah_data_admin($data,'admin');
		redirect('Dashboard/v_data_admin');
	}

	public function hapus_data_admin($id_admin)
	{
		$where = array('id_admin' => $id_admin);
		$this->M_dashboard->hapus_data_admin($where,'admin');
		redirect('Dashboard/v_data_admin');
	}

	public function v_edit_data_admin($id_admin)
	{
		$where = array('id_admin' => $id_admin);
		$data['admin'] = $this->M_dashboard->edit_data_admin($where, 'admin')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/admin/edit_admin', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_data_admin()
	{
		$id_admin = $this->input->post('id_admin');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$data = array
		(
			'email' => $email,
			'username' => $username,
			'password' => $password
		);

		$where = array('id_admin' => $id_admin);
		$this->M_dashboard->update_data_admin($where,$data,'admin');
		redirect('Dashboard/v_data_admin');
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
		$id_maskapai = $this->input->post('id_maskapai');
		$name = $this->input->post('name');
		$id_pesawat = $this->input->post('id_pesawat');
		$class = $this->input->post('class');

		$data = array
		(
			'id_maskapai' => $id_maskapai,
			'name' => $name,
			'id_pesawat' => $id_pesawat,
			'class' => $class
		);

		$this->M_dashboard->tambah_data_maskapai($data,'maskapai');
		redirect('Dashboard/v_data_maskapai');
	}

	public function hapus_data_maskapai($id_maskapai)
	{
		$where = array('id_maskapai' => $id_maskapai);
		$this->M_dashboard->hapus_data_maskapai($where,'maskapai');
		redirect('Dashboard/v_data_maskapai');
	}

	public function v_edit_data_maskapai($id_maskapai)
	{
		$where = array('id_maskapai' => $id_maskapai);
		$data['maskapai'] = $this->M_dashboard->edit_data_maskapai($where, 'maskapai')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/edit_maskapai', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_data_maskapai()
	{
		$id_maskapai = $this->input->post('id_maskapai');
		$name = $this->input->post('name');
		$id_pesawat = $this->input->post('id_pesawat');
		$class = $this->input->post('class');

		$data = array
		(
			'id_maskapai' => $id_maskapai,
			'name' => $name,
			'id_pesawat' => $id_pesawat,
			'class' => $class
		);

		$where = array('id_maskapai' => $id_maskapai);
		$this->M_dashboard->update_data_maskapai($where,$data,'maskapai');
		redirect('Dashboard/v_data_maskapai');
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
		$id_pesawat = $this->input->post('id_pesawat');
		$name = $this->input->post('name');
		$detail = $this->input->post('detail');

		$data = array
		(
			'id_pesawat' => $id_pesawat,
			'name' => $name,
			'detail' => $detail
		);

		$this->M_dashboard->tambah_data_pesawat($data,'pesawat');
		redirect('Dashboard/v_data_pesawat');
	}

	public function hapus_data_pesawat($id_pesawat)
	{
		$where = array('id_pesawat' => $id_pesawat);
		$this->M_dashboard->hapus_data_pesawat($where,'pesawat');
		redirect('Dashboard/v_data_pesawat');
	}

	public function v_edit_data_pesawat($id_pesawat)
	{
		$where = array('id_pesawat' => $id_pesawat);
		$data['pesawat'] = $this->M_dashboard->edit_data_pesawat($where, 'pesawat')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/edit_pesawat', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_data_pesawat()
	{
		$id_pesawat = $this->input->post('id_pesawat');
		$name = $this->input->post('name');
		$detail = $this->input->post('detail');

		$data = array
		(
			'id_pesawat' => $id_pesawat,
			'name' => $name,
			'detail' => $detail
		);

		$where = array('id_pesawat' => $id_pesawat);
		$this->M_dashboard->update_data_pesawat($where,$data,'pesawat');
		redirect('Dashboard/v_data_pesawat');
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
		$data['data_rute'] = $this->M_dashboard->data_rute();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/tambah_rute',$data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function tambah_rute_maskapai()
	{
		$id_rute = $this->input->post('id_rute');
		$id_maskapai = $this->input->post('id_maskapai');
		$id_route_from = $this->input->post('id_route_from');
		$id_route_to = $this->input->post('id_route_to');
		$departure = $this->input->post('departure');
		$arrival = $this->input->post('arrival');
		$price = $this->input->post('price');


		$data = array
		(
			'id_rute' => $id_rute,
			'id_maskapai' => $id_maskapai,
			'id_route_from' => $id_route_from,
			'id_route_to' => $id_route_to,
			'departure' => $departure,
			'arrival' => $arrival,
			'price' => $price
		);

		$this->M_dashboard->tambah_rute_maskapai($data,'rute');
		redirect('Dashboard/v_rute_maskapai');
	}

	public function hapus_rute_maskapai($id_rute)
	{
		$where = array('id_rute' => $id_rute);
		$this->M_dashboard->hapus_rute_maskapai($where,'rute');
		redirect('Dashboard/v_rute_maskapai');
	}

	public function v_edit_rute_maskapai($id_rute)
	{
		$where = array('id_rute' => $id_rute);
		$data['rute'] = $this->M_dashboard->edit_rute_maskapai($where, 'rute')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/edit_rute', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_rute_maskapai()
	{
		$id_rute = $this->input->post('id_rute');
		$id_maskapai = $this->input->post('id_maskapai');
		$id_route_from = $this->input->post('id_route_from');
		$id_route_to = $this->input->post('id_route_to');
		$departure = $this->input->post('departure');
		$arrival = $this->input->post('arrival');
		$price = $this->input->post('price');


		$data = array
		(
			'id_rute' => $id_rute,
			'id_maskapai' => $id_maskapai,
			'id_route_from' => $id_route_from,
			'id_route_to' => $id_route_to,
			'departure' => $departure,
			'arrival' => $arrival,
			'price' => $price
		);

		$where = array('id_rute' => $id_rute);
		$this->M_dashboard->update_rute_maskapai($where,$data,'rute');
		redirect('Dashboard/v_rute_maskapai');
	}

	// DATA BANDARA

	public function v_data_bandara()
	{
		$data['bandara'] = $this->M_dashboard->tampil_data_bandara()->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/bandara', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function v_tambah_data_bandara()
	{
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/tambah_bandara');
		$this->load->view('dashboard_admin/template/footer');
	}

	public function tambah_data_bandara()
	{
		$id_bandara = $this->input->post('id_bandara');
		$name = $this->input->post('name');
		$city = $this->input->post('city');

		$data = array
		(
			'id_bandara' => $id_bandara,
			'name' => $name,
			'city' => $city
		);

		$this->M_dashboard->tambah_data_bandara($data,'bandara');
		redirect('Dashboard/v_data_bandara');
	}

	public function hapus_data_bandara($id_bandara)
	{
		$where = array('id_bandara' => $id_bandara);
		$this->M_dashboard->hapus_data_bandara($where,'bandara');
		redirect('Dashboard/v_data_bandara');
	}

	public function v_edit_data_bandara($id_bandara)
	{
		$where = array('id_bandara' => $id_bandara);
		$data['bandara'] = $this->M_dashboard->edit_data_bandara($where, 'bandara')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/maskapai/edit_bandara', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_data_bandara()
	{
		$id_bandara = $this->input->post('id_bandara');
		$name = $this->input->post('name');
		$city = $this->input->post('city');

		$data = array
		(
			'id_bandara' => $id_bandara,
			'name' => $name,
			'city' => $city
		);

		$where = array('id_bandara' => $id_bandara);
		$this->M_dashboard->update_data_bandara($where,$data,'bandara');
		redirect('Dashboard/v_data_bandara');
	}

	// DETAIL USER

	public function v_admin()
	{
		$data['admin'] = $this->M_dashboard->tampil_admin()->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/detail/admin', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function v_edit_admin($id_admin)
	{
		$where = array('id_admin' => $id_admin);
		$data['admin'] = $this->M_dashboard->edit_admin($where, 'admin')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/detail/edit_admin', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function edit_admin()
	{
		$id_admin = $this->input->post('id_admin');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$data = array
		(
			'email' => $email,
			'username' => $username,
			'password' => $password
		);

		$where = array('id_admin' => $id_admin);
		$this->M_dashboard->update_admin($where,$data,'admin');
		redirect('User/v_admin');
	}

	// PESAN

	public function v_pesan()
	{
		$data['pesan'] = $this->M_dashboard->tampil_pesan()->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/pesan/pesan', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function v_more_pesan($id_pesan)
	{
		$where = array('id_pesan' => $id_pesan);
		$data['pesan'] = $this->M_dashboard->edit_pesan($where, 'pesan')->result();
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/pesan/more_pesan', $data);
		$this->load->view('dashboard_admin/template/footer');
	}

	public function v_tambah_pesan()
	{
		$this->load->view('dashboard_admin/template/header');
		$this->load->view('dashboard_admin/template/sidebar');
		$this->load->view('dashboard_admin/pesan/tambah_pesan');
		$this->load->view('dashboard_admin/template/footer');
	}

	public function tambah_pesan()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		$data = array
		(
			'name' => $name,
			'email' => $email,
			'subject' => $subject,
			'message' => $message
		);

		$this->M_dashboard->tambah_pesan($data,'pesan');
		redirect('Home/about');
	}

	public function hapus_pesan($id_pesan)
	{
		$where = array('id_pesan' => $id_pesan);
		$this->M_dashboard->hapus_pesan($where,'pesan');
		redirect('Dashboard/v_pesan');
	}

}