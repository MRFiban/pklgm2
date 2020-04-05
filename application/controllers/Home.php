<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['title'] = 'Home';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/auth_footer');
	}

	public function profile()
	{
		$data['title'] = 'Profile';
		$data['user'] = $this->db->get('user')->result_array();

		$this->load->view('templates/auth_header', $data);
		$this->load->view('home/profile', $data);
		$this->load->view('templates/auth_footer');
	}

	public function about()
	{
		$data['title'] = 'About';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('home/about', $data);
		$this->load->view('templates/auth_footer');
	}

	public function gallery()
	{
		$data['title'] = 'Gallery';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('home/gallery');
		$this->load->view('templates/auth_footer');
	}
	
}
