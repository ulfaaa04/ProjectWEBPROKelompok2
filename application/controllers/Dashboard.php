<?php

class Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda Belum Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('autentifikasi/login');
        }

    }

    public function tambah_ke_keranjang($id)
    {
        $tiket = $this->ModelTiket->find($id);

        $data = array(
            'id' => $tiket->id,
            'qty' => 1,
            'price' => $tiket->harga,
            'name' => $tiket->nama_tiket
        );

        $this->cart->insert($data);
        redirect('SelamatDatang');

    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('SelamatDatang');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->ModelPesanan->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses";
        }
    }

    public function detail($id)
    {
        $data['tiket'] = $this->ModelTiket->detail_tiket($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detailtiket', $data);
        $this->load->view('templates/footer');
    }
}