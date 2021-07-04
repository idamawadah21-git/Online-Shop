<?php
class Login_model extends CI_Model {
	function __construct(){
        parent::__construct();
        $this->load->helper('url');
	{
		$this->load->database();
	}
 
	 function login() {
 
		$username = $this->input->POST('username', TRUE);
		$password = md5($this->input->POST('password', TRUE));
		$data = $this->db->query("SELECT * from tb_login WHERE username='$username' and password='$password' LIMIT 1 ");
		return $data->row();
	}
}
}