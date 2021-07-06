<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    public function hapus_bukutamu($id)
    {
        $this->db->where('id_bukutamu', $id);
        $this->db->delete('tb_bukutamu');
    }

    public function edit_bukutamu()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "komentar" => $this->input->post('komentar', true),
        ];
        $this->db->where('id_bukutamu', $this->input->post('id_bukutamu'));
        $this->db->update('tb_bukutamu', $data);
    }

    public function hapus_kuliner($id)
    {
        $this->db->where('id_kuliner', $id);
        $this->db->delete('tb_kuliner');
    }

    public function edit_kuliner()
    {
        $data = [
            "nama_kuliner" => $this->input->post('nama_kuliner', true),
            "jumlah_kuliner" => $this->input->post('jumlah_kuliner', true),
            "alamat_kuliner" => $this->input->post('alamat_kuliner', true),
        ];
        $this->db->where('id_kuliner', $this->input->post('id_kuliner'));
        $this->db->update('tb_kuliner', $data);
    }

    public function hapusWisata($id)
    {
        $this->db->where('id_wisata', $id);
        $this->db->delete('tb_wisata');
    }

    public function editWisata()
    {
        $data = [
            "nama_wisata" => $this->input->post('nama_wisata', true),
            "jumlah_tiket" => $this->input->post('jumlah_tiket', true),
            "alamat_wisata" => $this->input->post('alamat_wisata', true),
            "email" => $this->input->post('email', true),
            "harga_tiket" => $this->input->post('harga_tiket', true),
        ];
        $this->db->where('id_wisata', $this->input->post('id_wisata'));
        $this->db->update('tb_wisata', $data);
    }

    public function hapushotel($id)
    {
        $this->db->where('id_hotel', $id);
        $this->db->delete('tb_hotel');
    }

    public function edithotel()
    {
        $data = [
            "nama_hotel" => $this->input->post('nama_hotel', true),
            "waktu_hotel" => $this->input->post('waktu_hotel', true),
            "alamat_hotel" => $this->input->post('alamat_hotel', true),
        ];
        $this->db->where('id_hotel', $this->input->post('id_hotel'));
        $this->db->update('tb_hotel', $data);
    }
}
