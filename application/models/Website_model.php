<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website_model extends CI_Model {

  public function view(){
    return $this->db->get('user')->result();
  }
  
  // Fungsi untuk menampilkan data user berdasarkan id nya
  public function view_by($id){
    $this->db->where('id', $id);
    return $this->db->get('user')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, id tidak harus divalidasi
    // Jadi id di validasi hanya ketika menambah data user saja
  public function registration()
   {
    $this->form_validation->set_rules('name', 'Nama', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', 
         ['matches' => 'password dont match', 'min_length' => 'password too shorts']);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
   }

    if($this->form_validation->run())// Jika validasi benar
    {
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
      else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array[
      "name" => $this->input->post('name'),
      "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      "email" => $this->input->post('email'),
      "image" => 'default.jpg',
      "role_id" => 2,
      "is_active" => 1,
      "date_created" => time()
    ];
    
    $this->db->insert('user', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function edit($nis){
    $data = array(
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "telp" => $this->input->post('input_telp'),
      "alamat" => $this->input->post('input_alamat')
    );
    
    $this->db->where('nis', $nis);
    $this->db->update('siswa', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($nis){
    $this->db->where('nis', $nis);
    $this->db->delete('siswa'); // Untuk mengeksekusi perintah delete data
  }
}




}