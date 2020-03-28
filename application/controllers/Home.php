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
		$this->load->view('templates/auth_footer', $data);
	}

	public function inventaris()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('home/inventaris');
		$this->load->view('templates/auth_footer');
	}

	public function profile()
	{
		$data['title'] = 'Profile';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('home/profile');
		$this->load->view('templates/auth_footer');
	}

	public function about()
	{
		$data['title'] = 'About';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('home/about');
		$this->load->view('templates/auth_footer');
	}

	public function gallery()
	{
		$data['title'] = 'Gallery';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('home/galery');
		$this->load->view('templates/auth_footer');
	}

	public function electrical()
	{
		$data['title'] = 'Electrical';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('home/electrical');
		$this->load->view('templates/auth_footer');
	}

	public function mechanical()
	{
		$data['title'] = 'Mechanical';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('home/mechanical');
		$this->load->view('templates/auth_footer');
	}

	public function it_consult()
	{
		$data['title'] = 'IT Consult';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('home/it_consult');
		$this->load->view('templates/auth_footer');
	}
}
