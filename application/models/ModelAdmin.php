<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{
 public function simpanData($data = null)
 {
 $this->db->insert('tb_login', $data);
 }
 public function cekData($where = null)
 {
 return $this->db->get_where('tb_login', $where);
 }
 public function getUserWhere($where = null)
 {
 return $this->db->get_where('tb_login', $where);
 }
 public function getUserLimit()
 {
 $this->db->select('*');
 $this->db->from('tb_login');
 $this->db->limit(10, 0);
 return $this->db->get();
 }
 
}
