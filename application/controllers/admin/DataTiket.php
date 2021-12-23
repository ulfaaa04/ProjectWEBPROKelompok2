<?php

class DataTiket extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda Belum Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('Autentifikasi/login');
        }

    }
    
    public function index()
    {
        $data['tiket'] = $this->ModelTiket->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/DataTiket', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_tiket = $this->input->post('nama_tiket');
        $kategori = $this->input->post('kategori');
        $kelas = $this->input->post('kelas');
        $info_tanggal = $this->input->post('info_tanggal');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        $image = $_FILES['image']['name'];
        if ($image = ''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif|png';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('image')){
                echo "Gambar Gagal diUpload!";
            }else {
                $image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_tiket' => $nama_tiket,
            'kategori' => $kategori,
            'kelas' => $kelas,
            'info_tanggal' => $info_tanggal,
            'stok' => $stok,
            'harga' => $harga,
            'image' => $image
        );

        $this->ModelTiket->tambah_tiket($data, 'tiket');
        redirect('admin/DataTiket/index');
    }

    public function edit($id)
    {
        $where = array('id' =>$id);
        $data['tiket'] = $this->ModelTiket->edit_tiket($where, 'tiket')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edittiket', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id = $this->input->post('id');
        $nama_tiket = $this->input->post('nama_tiket');
        $kategori = $this->input->post('kategori');
        $kelas = $this->input->post('kelas');
        $info_tanggal = $this->input->post('info_tanggal');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_tiket' => $nama_tiket,
            'kategori' => $kategori,
            'kelas' => $kelas,
            'info_tanggal' => $info_tanggal,
            'stok' => $stok,
            'harga' => $harga
        );

        $where = array(
            'id' => $id
        );

        $this->ModelTiket->update_tiket($where,$data,'tiket');
        redirect('admin/DataTiket/index');
    }

    public function hapus ($id)
    {
        $where = array('id' => $id);
        $this->ModelTiket->hapus_tiket($where, 'tiket');
        redirect('admin/DataTiket/index');
    }
}