<?php 
defined('BASEPATH') OR exit('no direct script access allowed'); 

class Login extends CI_Controller {
     function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Login_model');  
     } 

     function index(){
         $this->load->view('h_login');
     }

     function proses(){
         $username = $this->input->POST('username');
         $password = $this->input->POST('password');
         
         if ($this->m_login()->cek_login($username, $password)){
              echo '<h1>Hallo selamat datang admin</h1>';
              echo '<a href="'.site_url('login').'"> Kembali </a>';
         }else{
              echo '<h1>Username atau password salah</h1>';
              echo '<a href="'.site_url('login').'"> Kembali </a>';
         }
     }           
}
?>