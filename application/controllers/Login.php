<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/login');
		$this->load->view('home/template/footer');
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

	public function auth()
	{
		$data_login=array
		(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$data=$this->M_login->login($data_login['username'], $data_login['password']);

		if ($data)
		{
			$this->session->set_userdata('id', $data['id']);
			$this->session->set_userdata('username', $data['username']);
			$this->session->set_userdata('level', $data['level']);
			redirect('User','refresh');
		}
		else
		{
			echo("Username atau password anda salah!");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Home','refresh');
	}
	
}
