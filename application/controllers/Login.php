<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_login'));
	}

	public function index()
	{
		$this->load->view('home/login');
	}

	public function signup()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/signup');
		$this->load->view('home/template/footer');
	}

	public function admin()
	{
		$this->load->view('home/login_admin');
	}

	public function admin_auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array
		(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->M_login->admin_auth('admin',$where)->num_rows();
		if($cek > 0)
		{
			$data_session = array
			(
				'username' => $username,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('Login/admin'));
		} 
		else
		{
			echo "Username atau password salah!";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Home','refresh');
	}

}
