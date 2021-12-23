<?php

class ModelKategori extends CI_Model{
    public function data_pesawat(){
        return $this->db->get_where("tiket",array('kategori' => 'pesawat'));
    }

    public function data_kereta(){
        return $this->db->get_where("tiket",array('kategori' => 'kereta'));
    }

    public function data_bus(){
        return $this->db->get_where("tiket",array('kategori' => 'bus'));
    }

}
