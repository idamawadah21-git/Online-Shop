<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Web extends CI_Controller
{

    public function login()
    {
        $this->load->view('admin/h_login');
    }

    public function admin()
    {
        $this->load->view('template/a_header');
        $this->load->view('admin/admin');
        $this->load->view('template/a_footer');
    }

    public function admin_bukutamu()
    {
        $data['judul'] = 'Buku Tamu';
        $data['bukutamu'] = $this->db->get('tb_bukutamu')->result_array();
        $this->load->view('template/a_header', $data);
        $this->load->view('admin/bukutamu', $data);
        $this->load->view('template/a_footer', $data);
    }

    public function edit_bukutamu()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('komentar', 'Komentar', 'required');

        $this->load->model('Admin_model', 'bukutamu');
        $data['bukutamu'] = $this->bukutamu->edit_bukutamu();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Buku Tamu sudah diedit</div>');
        redirect('web/admin_bukutamu');
    }

    public function hapus_bukutamu($id)
    {
        $this->load->model('Admin_model', 'bukutamu');

        $data['hapus_bukutamu'] = $this->bukutamu->hapus_bukutamu($id);
        $data['bukutamu'] = $this->db->get('tb_bukutamu')->result_array();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Buku Tamu sudah dihapus</div>');
        redirect('web/admin_bukutamu');
    }

    public function admin_kuliner()
    {
        $data['judul'] = 'Kuliner';
        $data['kuliner'] = $this->db->get('tb_kuliner')->result_array();

        $this->load->view('template/a_header', $data);
        $this->load->view('admin/kuliner', $data);
        $this->load->view('template/a_footer', $data);
    }

    public function edit_kuliner()
    {

        $this->form_validation->set_rules('nama_kuliner', 'Nama_kuliner', 'required');
        $this->form_validation->set_rules('jumlah_kuliner', 'Jumlah_kuliner', 'required');
        $this->form_validation->set_rules('alamat_kuliner', 'Alamat_kuliner', 'required');

        $this->load->model('Admin_model', 'makanan');
        $data['kuliner'] = $this->makanan->edit_kuliner();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Kuliner sudah diedit</div>');
        redirect('web/admin_kuliner');
    }

    public function hapus_kuliner($id)
    {
        $this->load->model('Admin_model', 'kuliner');

        $data['hapus_kuliner'] = $this->kuliner->hapus_kuliner($id);
        $data['kuliner'] = $this->db->get('tb_kuliner')->result_array();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Kuliner sudah dihapus</div>');
        redirect('web/admin_kuliner');
    }

    public function admin_wisata()
    {
        $data['judul'] = 'wisata';
        $data['wisata'] = $this->db->get('tb_wisata')->result_array();

        $this->load->view('template/a_header', $data);
        $this->load->view('admin/wisata', $data);
        $this->load->view('template/a_footer', $data);
    }

    public function edit_wisata()
    {

        $this->form_validation->set_rules('nama_wisata', 'Nama_wisata', 'required');
        $this->form_validation->set_rules('alamat_wisata', 'Alamat_wisata', 'required');
        $this->form_validation->set_rules('harga_tiket', 'Harga_tiket', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('jumlah_tiket', 'Jumlah_tiket', 'required');


        $this->load->model('Admin_model', 'wisata');
        $data['wisata'] = $this->wisata->editWisata();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Wisata sudah diedit</div>');
        redirect('web/admin_wisata');
    }

    public function hapus_wisata($id)
    {
        $this->load->model('Admin_model', 'wisata');

        $data['hapus_wisata'] = $this->wisata->hapusWisata($id);
        $data['wisata'] = $this->db->get('tb_wisata')->result_array();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Wisata sudah dihapus</div>');
        redirect('web/admin_wisata');
    }

    public function admin_hotel()
    {
        $data['judul'] = 'Hotel';
        $data['hotel'] = $this->db->get('tb_hotel')->result_array();

        $this->load->view('template/a_header', $data);
        $this->load->view('admin/hotel', $data);
        $this->load->view('template/a_footer', $data);
    }

    public function edit_hotel()
    {

        $this->form_validation->set_rules('nama_hotel', 'Nama_hotel', 'required');
        $this->form_validation->set_rules('alamat_hotel', 'Alamat_hotel', 'required');
        $this->form_validation->set_rules('harga_tiket', 'Harga_tiket', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('jumlah_tiket', 'Jumlah_tiket', 'required');


        $this->load->model('Admin_model', 'hotel');
        $data['hotel'] = $this->hotel->edithotel();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Hotel sudah diedit</div>');
        redirect('web/admin_hotel');
    }

    public function hapus_hotel($id)
    {
        $this->load->model('Admin_model', 'hotel');

        $data['hapus_hotel'] = $this->hotel->hapushotel($id);
        $data['hotel'] = $this->db->get('tb_hotel')->result_array();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Hotel sudah dihapus</div>');
        redirect('web/admin_hotel');
    }

    public function admin_tiketwisata()
    {
        $data['judul'] = 'Tiket Wisata';
        $data['tiketwisata'] = $this->db->get('tb_tiketwisata')->result_array();

        $this->load->view('template/a_header', $data);
        $this->load->view('admin/tiket_wisata', $data);
        $this->load->view('template/a_footer', $data);
    }

    public function edit_tiketwisata()
    {

        $this->form_validation->set_rules('nama_tiketwisata', 'Nama_tiketwisata', 'required');
        $this->form_validation->set_rules('alamat_tiketwisata', 'Alamat_tiketwisata', 'required');
        $this->form_validation->set_rules('harga_tiket', 'Harga_tiket', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('jumlah_tiket', 'Jumlah_tiket', 'required');


        $this->load->model('Admin_model', 'tiketwisata');
        $data['tiketwisata'] = $this->tiketwisata->edittiketwisata();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Tiket Wisata sudah diedit</div>');
        redirect('web/admin_tiketwisata');
    }

    public function hapus_tiketwisata($id)
    {
        $this->load->model('Admin_model', 'tiketwisata');

        $data['hapus_tiketwisata'] = $this->tiketwisata->hapustiketwisata($id);
        $data['tiketwisata'] = $this->db->get('tb_tiketwisata')->result_array();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Tiket Wisata sudah dihapus</div>');
        redirect('web/admin_tiketwisata');
    }

    public function index()
    {
        $data['judul'] = 'Home';
        $this->load->view('template/v_header', $data);
        $this->load->view('user/v_index', $data);
        $this->load->view('template/v_footer', $data);
    }

    public function gallery()
    {
        $data['judul'] = 'Gallery';
        $this->load->view('template/v_header', $data);
        $this->load->view('user/v_gallery', $data);
        $this->load->view('template/v_footer', $data);
    }

    public function bukutamu()
    {
        $data['judul'] = 'Buku Tamu';
        $data['bukutamu'] = $this->db->get('tb_bukutamu')->result_array();

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('komentar', 'komentar', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('template/v_header', $data);
            $this->load->view('user/v_bukutamu', $data);
            $this->load->view('template/v_footer', $data);
        } else {
            $this->db->insert('tb_bukutamu', [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'komentar' => $this->input->post('komentar'),
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Pesan Sudah Terkirim!</div>');
            redirect('web/bukutamu');
        }
    }

    public function kuliner()
    {
        $data['judul'] = 'Kuliner';
        $data['kuliner'] = $this->db->get('tb_kuliner')->result_array();

        $this->form_validation->set_rules('nama_kuliner', 'Nama_kuliner', 'required');
        $this->form_validation->set_rules('alamat_kuliner', 'Alamat_kuliner', 'required');
        $this->form_validation->set_rules('jumlah_kuliner', 'Jumlah_kuliner', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('template/v_header', $data);
            $this->load->view('user/v_kuliner', $data);
            $this->load->view('template/v_footer', $data);
        } else {
            $this->db->insert('tb_kuliner', [
                'nama_kuliner' => $this->input->post('nama_kuliner'),
                'alamat_kuliner' => $this->input->post('alamat_kuliner'),
                'jumlah_kuliner' => $this->input->post('jumlah_kuliner'),
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Kuliner Sudah Dipesan!</div>');
            redirect('web/kuliner');
        }
    }

    public function hotel()
    {
        $data['judul'] = 'Hotel';
        $data['Hotel'] = $this->db->get('tb_Hotel')->result_array();

        $this->form_validation->set_rules('nama_hotel', 'Nama_hotel', 'required');
        $this->form_validation->set_rules('alamat_hotel', 'Alamat_hotel', 'required');
        $this->form_validation->set_rules('waktu_hotel', 'waktu_hotel', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('template/v_header', $data);
            $this->load->view('user/v_hotel', $data);
            $this->load->view('template/v_footer', $data);
        } else {
            $this->db->insert('tb_Hotel', [
                'nama_hotel' => $this->input->post('nama_hotel'),
                'alamat_hotel' => $this->input->post('alamat_hotel'),
                'waktu_hotel' => $this->input->post('waktu_hotel'),
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Hotel Sudah Dipesan!</div>');
            redirect('web/hotel');
        }
    }

    public function wisata()
    {
        $data['judul'] = 'Wisata Rekreasi';
        $data['wisata'] = $this->db->get('tb_wisata')->result_array();

        $this->form_validation->set_rules('nama_wisata', 'Nama_wisata', 'required');
        $this->form_validation->set_rules('alamat_wisata', 'Alamat_wisata', 'required');
        $this->form_validation->set_rules('harga_tiket', 'Harga_tiket', 'required');
        $this->form_validation->set_rules('jumlah_tiket', 'Jumlah_tiket', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('template/v_header', $data);
            $this->load->view('user/v_wisata', $data);
            $this->load->view('template/v_footer', $data);
        } else {
            $this->db->insert('tb_wisata', [
                'nama_wisata' => $this->input->post('nama_wisata'),
                'alamat_wisata' => $this->input->post('alamat_wisata'),
                'harga_tiket' => $this->input->post('harga_tiket'),
                'jumlah_tiket' => $this->input->post('jumlah_tiket'),
                'email' => $this->input->post('email'),
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Tiket Sudah Dipesan!</div>');
            redirect('web/wisata');
        }
    }
}
