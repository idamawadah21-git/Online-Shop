<?php
class Autentifikasi extends CI_Controller
{
 public function index()
 {
 //jika statusnya sudah login, maka tidak bisa mengakses
halaman login alias dikembalikan ke tampilan user
 if($this->session->userdata('username')){
 redirect('tb_login');
 }
 $this->form_validation->set_rules('username', 'isi username',
'required|trim|valid_email', [
 'required' => 'Username Harus Diisi!!',
 'valid_email' => 'Username Salah!!'
 ]);
 $this->form_validation->set_rules('password', 'Password',
'required|trim', [
 'required' => 'Password Harus diisi'
 ]);
 if ($this->form_validation->run() == false) {
 $data['judul'] = 'Login';
 $data['tb_login'] = '';
 //kata 'login' merupakan nilai dari variabel judul dalam
array $data dikirimkan ke view aute_header
 $this->load->view('templates/aut_header', $data);
 $this->load->view('aute/login');
 $this->load->view('templates/aute_footer');
 } else {
 $this->_login();
 }
 }
private function _login()
 {
 $email = htmlspecialchars($this->input->post('username',
true));
 $password = $this->input->post('password', true);
 $user = $this->ModelUser->cekData(['username' => $email])-
>row_array();
 //jika usernya ada
 if ($user) {
 //jika user sudah aktif
 if ($user['is_active'] == 1) {
 //cek password
 if (password_verify($password, $user['password'])) {
 $data = [
 'email' => $user['email'],
 } else {
 if ($user['image'] == 'default.jpg') {
 $this->session->set_flashdata('pesan',
'<div class="alert alert-info alert-message" role="alert">Silahkan
Ubah Profile Anda untuk Ubah Photo Profil</div>');
 }
 redirect('tb_login');
 }
 } else {
 $this->session->set_flashdata('pesan', '<div
class="alert alert-danger alert-message" role="alert">Password
salah!!</div>');
 redirect('autentifikasi');
 }
 } else {
 $this->session->set_flashdata('pesan', '<div
class="alert alert-danger alert-message" role="alert">User belum
diaktifasi!!</div>');
 redirect('autentifikasi');
 }
 } else {
 $this->session->set_flashdata('pesan', '<div
class="alert alert-danger alert-message" role="alert">Email tidak
terdaftar!!</div>');
 redirect('autentifikasi');
 }
 }
}