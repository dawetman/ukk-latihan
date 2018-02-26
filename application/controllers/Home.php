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
		$data['route_from'] = $this->M_home->route_from();
		$data['route_to'] = $this->M_home->route_to();
		$this->load->view('home/template/header');
		$this->load->view('home/template/banner');
		$this->load->view('home/index',$data);
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

	public function flight_search()
	{
		$data['route_from'] = $this->M_home->route_from();
		$data['route_to'] = $this->M_home->route_to();
		$data['rute'] = $this->M_home->flight_search();
		$data['rute_from'] = $this->M_home->flight_from();
		$data['rute_to'] = $this->M_home->flight_to();
		$this->load->view('home/template/header');
		$this->load->view('home/flight_search',$data);
		$this->load->view('home/template/footer');
	}

	public function flight_detail($id_rute)
	{
		$data['detail_from'] = $this->M_home->flight_detail_from($id_rute);
		$data['detail_to'] = $this->M_home->flight_detail_to($id_rute);
		$data['detail'] = $this->M_home->flight_detail($id_rute);
		$this->load->view('home/template/header');
		$this->load->view('home/flight_detail',$data);
		$this->load->view('home/template/footer');
	}

	public function flight_booking()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/flight_booking');
		$this->load->view('home/template/footer');
	}

	public function flight_checkout()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/flight_checkout');
		$this->load->view('home/template/footer');
	}

	public function tos()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/tos');
		$this->load->view('home/template/footer');
	}

	public function blog_post01()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/blog/blog_post01');
		$this->load->view('home/template/footer');
	}

	public function blog_post02()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/blog/blog_post02');
		$this->load->view('home/template/footer');
	}

	public function blog_post03()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/blog/blog_post03');
		$this->load->view('home/template/footer');
	}

	public function blog_post04()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/blog/blog_post04');
		$this->load->view('home/template/footer');
	}

	public function blog_post05()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/blog/blog_post05');
		$this->load->view('home/template/footer');
	}

}
