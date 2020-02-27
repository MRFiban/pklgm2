<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Send_email extends CI_Controller
{

    public function index()
    {
        $this->send_mail();
    }


    public function send_mail()
    {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => '465',
            'smtp_user' => 'toniindriyanto27@gmail.com',
            'smtp_pass' => '089605533669',
            'smtp_crypto' => 'ssl',
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'wordwrap' => TRUE
        );

        $message = "hello word !";
        $this->load->library('email', $config);
        $this->email->set_newline("r\n");
        $this->email->from('toniindriyanto27@gmail.com');
        $this->email->to('toniindriyanto27@gmail.com');
        $this->email->subject('subject : Send Mail');
        $this->email->message($message);
        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }
}
