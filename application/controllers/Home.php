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
		$this->load->view('templates/auth_header');
		$this->load->view('website/home_page');
		$this->load->view('templates/auth_footer');
	}

	function inventaris()
	{

		$this->load->view('website/inventaris');
		$this->load->view('templates/auth_footer');
	}


	function gallery()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('website/galery');
		$this->load->view('templates/auth_footer');
	}

	function profil()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('website/profil');
		$this->load->view('templates/auth_footer');
	}

	function about()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('website/about');
	}

	function electrical()
	{
		$this->load->view('website/electrical');
		$this->load->view('templates/auth_footer');
	}

	function mechanical()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('website/mechanical');
		$this->load->view('templates/auth_footer');
	}

	function informasi_teknologi()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('website/informasi_teknologi');
		$this->load->view('templates/auth_footer');
	}
}
