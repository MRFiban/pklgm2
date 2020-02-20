<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->('form validation');
    $this->load->('url');
  }


  public function view()
  {
    return $this->db->get('user')->result();
  }

  
  // Fungsi untuk menampilkan data user berdasarkan id nya
  public function view_by($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('user')->row();
  }


  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode)
  {
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, id tidak harus divalidasi
    // Jadi id di validasi hanya ketika menambah data user saja
    if($mode == "save") 
    {
      $this->form_validation->set_rules('input_id', 'id', 'required|trim'); 
      $this->form_validation->set_rules('input_name', 'Name', 'required|max_length[50]');
      $this->form_validation->set_rules('input_email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
      $this->form_validation->set_rules('input_password', 'Password', 'required');
    }

    if($this->form_validation->run())
    { // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
     else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }
  
    // Fungsi untuk melakukan simpan data ke tabel user
    public function save()
    {
      $data = array[
      "id" => $this->input->post('input_id'),
      "Name" => $this->input->post('input_name'),
      "Email" => $this->input->post('input_email'),
      "Password" => $this->input->post('input_password'),
      "date_created" => time()
      ];
    
      $this->db->insert('user', $data); // Untuk mengeksekusi perintah insert data
    }
  
    
    // Fungsi untuk melakukan ubah data user berdasarkan id user
    public function edit($id)
    {
      $data = array[
      "Name" => $this->input->post('input_name'),
      "Email" => $this->input->post('input_email'),
      "Password" => $this->input->post('input_password')
      ];
    
      $this->db->where('id', $id);
      $this->db->update('user', $data); // Untuk mengeksekusi perintah update data
    }
  
    // Fungsi untuk melakukan menghapus data user berdasarkan id user
    public function delete($id)
    {
      $this->db->where('id', $id);
      $this->db->delete('user'); // Untuk mengeksekusi perintah delete data
    }
  }




}