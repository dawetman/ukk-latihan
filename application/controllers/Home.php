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
		$this->session->unset_userdata('booking');
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

	public function flight_ticket()
	{
		$data['id_reservasi'] = $this->input->get('id_reservasi');
		$data['ticket'] = $this->M_home->flight_ticket($data['id_reservasi']);
		$data['ticket_from'] = $this->M_home->flight_ticket_from($data['id_reservasi'])->result();
		$data['ticket_to'] = $this->M_home->flight_ticket_to($data['id_reservasi'])->result();
		$data['jml_baris'] = $data['ticket']->num_rows();
 		$this->load->view('home/template/header');
		$this->load->view('home/flight_ticket',$data);
		$this->load->view('home/template/footer');
	}

	public function about()
	{
		$this->load->view('home/template/header');
		$this->load->view('home/about');
		$this->load->view('home/template/footer');
	}

	public function v_ticket()
	{
		$this->load->view('dashboard/template/header');
		$this->load->view('dashboard/template/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('dashboard/template/footer');
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
		$this->session->unset_userdata('booking');
		$data['detail_from'] = $this->M_home->flight_detail_from($id_rute);
		$data['detail_to'] = $this->M_home->flight_detail_to($id_rute);
		$data['detail'] = $this->M_home->flight_detail($id_rute);
		$data['id_rute'] = $id_rute;
		$this->load->view('home/template/header');
		$this->load->view('home/flight_detail',$data);
		$this->load->view('home/template/footer');
	}

	public function flight_booking()
	{
		$this->session->set_userdata('booking','true');
		$data['tanggal'] = $this->input->post('tanggal');
		$data['id_rute'] = $this->input->post('id_rute');
		$data['harga'] = $this->input->post('harga');
		$data['detail_from'] = $this->M_home->flight_detail_from($data['id_rute']);
		$data['detail_to'] = $this->M_home->flight_detail_to($data['id_rute']);
		$data['detail'] = $this->M_home->flight_detail($data['id_rute']);
		$this->load->view('home/template/header');
		$this->load->view('home/flight_booking',$data);
		$this->load->view('home/template/footer');
	}

	public function flight_reservation()
	{
		$id_pelanggan = "";
		$id_user = $this->session->userdata("id_user");
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
		$id_reservasi = $this->input->post('id_reservasi');
		$date_flight = $this->input->post('date_flight');
		$id_rute = $this->input->post('id_rute');
		$price = $this->input->post('price');
		$status = $this->input->post('status');
		$id_booking = $this->input->post('id_booking');
		$id_reservasi_booking = $this->input->post('id_reservasi');
		$seat = $this->input->post('seat');

		$data_reservasi = array
		(
			'id_reservasi' => $id_reservasi,
			'id_user' => $id_user,
			'date_flight' => $date_flight,
			'id_rute' => $id_rute,
			'price' => (substr($price,0,-3).random_string('numeric', 3)),
			'status' => $status
		);

		$this->db->insert('reservasi', $data_reservasi);

		for ($i=0; $i<count($seat); $i++)
		{
			$id_pelanggan = $this->db->get('pelanggan')->num_rows()+1;
			$data_pelanggan = array
			(
				'id_pelanggan' => $id_pelanggan,
				'id_user' => $id_user,
				'id_card' => $id_card[$i],
				'email' => $email[$i],
				'name_f' => $name_f[$i],
				'name_b' => $name_b[$i],
				'gender' => $gender[$i],
				'address' => $address[$i],
				'phone' => $phone[$i],
				'city' => $city[$i],
				'country' => $country[$i],
				'zip' => $zip[$i]
			);
			$this->db->insert('pelanggan', $data_pelanggan);

			$data_booking = array
			(
				'id_booking' => $id_booking[$i],
				'id_reservasi' => $id_reservasi,
				'id_pelanggan' => $id_pelanggan,
				'id_user' => $id_user,
				'seat' => $seat[$i]
			);
			$this->db->insert('booking', $data_booking);
		}
	}

	public function flight_checkout()
	{
		if ($this->input->post('id_reservasi') == null || $this->session->userdata('booking') == null)
		{
			redirect('Home','refresh');
		}
		$this->flight_reservation();
		$data['id_reservasi'] = $this->input->post('id_reservasi');
		$data['ticket'] = $this->M_home->flight_ticket($data['id_reservasi']);
		$data['ticket_from'] = $this->M_home->flight_ticket_from($data['id_reservasi'])->result();
		$data['ticket_to'] = $this->M_home->flight_ticket_to($data['id_reservasi'])->result();
		$data['jml_baris'] = $data['ticket']->num_rows();
		$this->session->unset_userdata('booking');
		$this->load->view('home/template/header');
		$this->load->view('home/flight_checkout', $data);
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
