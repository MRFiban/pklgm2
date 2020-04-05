<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['title'] = 'Product';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['produk'] = $this->db->get_where('produk')->row_array();
		$this->load->view('templates/user_header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('product/index', $data);
		$this->load->view('templates/user_footer');
	}

	public function electrical()
	{
		$data['title'] = 'Electrical';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('product/electrical', $data);
		$this->load->view('templates/auth_footer');
	}

	public function it_consult()
	{
		$data['title'] = 'Information Technology';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('product/it_consult', $data);
		$this->load->view('templates/auth_footer');
	}

	public function mechanical()
	{
		$data['title'] = 'Mechanical';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('product/mechanical', $data);
		$this->load->view('templates/auth_footer');
	}


}