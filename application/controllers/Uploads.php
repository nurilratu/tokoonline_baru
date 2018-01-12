<?php
    class Uploads extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('upload');
        }
        public function tambah() {
            $config['upload_path']          = './dist/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = TRUE;
         
            $this->load->library('upload', $config);
            $judul = $this->input->post('judul');
            if($this->upload->do_upload('upload_gambar')){
                $gambar = $this->upload->data('file_name');
                $data = array(
                    'gambar' => $gambar,
                    'nama_gambar' => $nama_gambar
                );
                $this->upload->input($data, 'upload');
                $this->session->set_flashdata("success", "Berhasil Ditambahkan");
                redirect(base_url('admin/upload'));
            }
            $this->session->set_flashdata("error", "Gagal Ditambahkan");
            redirect(base_url('admin/upload'));
        }
    }