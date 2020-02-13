<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function login()
    {
        $data['title'] = 'Login Pages';
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

		public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'password dont match', 'min_length' => 'password too shorts']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if( $this->form_validation->run() ==false)
        {
            $data['title'] = 'PT. GM2';

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'this email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'WPU User Registration';

            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'image' => 'default.jpg',
                'password' => password_hash(
                    $this->input->post('password'),
                    PASSWORD_DEFAULT
                ),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];


        else
        {
            $data = []

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congratulation! your acccount has been created. Please Login </div>');
            redirect('auth/login');

        }
    }
}
