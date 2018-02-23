<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
	}

	public function index()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/index');
		$this->load->view('home/template/footer');
	}
	
	public function blog()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/blog');
		$this->load->view('home/template/footer');
	}

	public function about()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/about');
		$this->load->view('home/template/footer');
	}

}
