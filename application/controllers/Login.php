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
		$data['redirect'] = "";
		$this->load->view('home/login',$data);
	}

	public function redirect($redirect)
	{
		$data['redirect'] = $redirect;
		$this->load->view('home/login', $data);
	}

	public function signup()
	{
		$this->load->view('home/signup');
	}

	public function register()
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

		$username_check = $this->M_login->username_check($data['username']);

		if ($username_check)
		{
			$this->M_login->register($data,'user');
			redirect('Home','refresh');
		}
		else
		{
			$this->session->set_flashdata('error_msg', 'Username atau email sudah terdaftar!');
			redirect('Login/signup','refresh');
		}
	}

	public function register_modal()
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

		$username_check = $this->M_login->username_check($data['username']);

		if ($username_check)
		{
			$this->M_login->register($data,'user');
			redirect('Home','refresh');
		}
		else
		{
			$this->session->set_flashdata('error_msg', 'Username atau email sudah terdaftar!');
			redirect('Home','refresh');
		}
	}

	public function admin()
	{
		$this->load->view('home/login_admin');
	}

	public function auth_admin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array
		(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->M_login->auth_admin("admin",$where);
		if($cek->num_rows() > 0)
		{
			$data_session = array
			(
				'id_admin' => $cek->result()[0]->id_admin,
				'name' => $cek->result()[0]->name,
				'username' => $username,
				'status' => "admin"
			);
			$this->session->set_userdata($data_session);
			redirect('Dashboard','refresh');
		}
		else
		{
			echo "Username atau password salah!";
		}
	}

	public function auth_user($redirect = "")
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array
		(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->M_login->auth_user("user",$where);
		if($cek->num_rows() > 0)
		{
			$data_session = array
			(
				'id_user' => $cek->result()[0]->id_user,
				'name' => $cek->result()[0]->name,
				'username' => $username,
				'status' => "user"
			);
			$this->session->set_userdata($data_session);
			(($redirect != null)? redirect('Home/flight_detail/'.$redirect,'refresh'):redirect('Home','refresh'));
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
