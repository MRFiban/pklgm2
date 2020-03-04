<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
    }


 public function index()
	{
		$this->load->view('website/home_page');

	}

 function inventaris()
	{
		$this->load->view('website/inventaris');

	}

public function about()
	{
		$this->load->view('website/about');
	}

}
