<?php
defined('BASEPATH') or exit('No direct script access allowed');

Class Menu extends CI_Controller
{

    public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('url');
    $this->load->model('Menu_model');
  }
  
	public function index()
	{
	    $data['title'] = 'Menu Management';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['menu'] = $this->db->get('user_menu')->result_array();

           $this->form_validation->set_rules('menu', 'Menu', 'required');

           if($this->form_validation->run() == false )

            {
              $this->load->view('templates/user_header', $data);
              $this->load->view('templates/sidebar', $data);
              $this->load->view('templates/topbar', $data);
              $this->load->view('menu/index', $data);
              $this->load->view('templates/user_footer');
            }

           else
           {
                  $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
                  $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Menu Added</div>');
                  redirect('menu');
           }
  }

  public function submenu()
  {
            $data['title'] = 'Sub Menu Management';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->model('Menu_model', 'menu');

            /*$data['submenu'] = $this->db->get('user_sub_menu')->result_array();*/

            $data['submenu'] = $this->menu->getSubMenu();
            $data['menu'] = $this->db->get('user_menu')->result_array();

            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/user_footer');
  }

  public function inventory()
  {
        $data['title'] = 'Inventory';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/inventory', $data);
        $this->load->view('templates/user_footer');
  }

  public function hapus($m)
  {

            $this->Menu_model->hapusDataMenu($m);
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Menu telah di Banned!</div>');
            redirect('menu');
  }

}









            

      