<?php

class Kategori extends CI_Controller{
    public function pesawat()
    {
        $data['pesawat'] = $this->ModelKategori->data_pesawat()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pesawat', $data);
        $this->load->view('templates/footer');
    }

    public function kereta()
    {
        $data['kereta'] = $this->ModelKategori->data_kereta()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kereta', $data);
        $this->load->view('templates/footer');
    }

    public function bus()
    {
        $data['bus'] = $this->ModelKategori->data_bus()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bus', $data);
        $this->load->view('templates/footer');
    }

}