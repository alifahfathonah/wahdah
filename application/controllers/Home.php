<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login_admin') == FALSE) {
			redirect('login');
		}
	}
	public function index()
	{
		if ($this->session->userdata('level') == 1) {
			$data['title'] = 'Wahdah Islamiyah Kendari - Home';
			$this->load->view('template/header_admin', $data);
			$this->load->view('home_admin');
			$this->load->view('template/footer_admin');
		}
	}
}
