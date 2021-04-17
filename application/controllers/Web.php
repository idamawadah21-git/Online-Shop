<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Web extends CI_Controller{
    function __construct(){
    parent::__construct();
    $this->load->helper('url');
    }
        public function index(){
        $data['judul'] = 'Home';
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
        }
        public function kuliner(){
            $data['judul'] = 'Kuliner';
            $this->load->view('v_header',$data);
            $this->load->view('v_kuliner',$data);
            $this->load->view('v_footer',$data);
        }
        public function hotel(){
            $data['judul'] = 'Hotel';
            $this->load->view('v_header',$data);
            $this->load->view('v_hotel',$data);
            $this->load->view('v_footer',$data);
        }
        public function wisata(){
            $data['judul'] = 'Wisata Rekreasi';
            $this->load->view('v_header',$data);
            $this->load->view('v_wisata',$data);
            $this->load->view('v_footer',$data);
        }
        
}
?>