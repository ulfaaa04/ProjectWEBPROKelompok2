<?php

class ModelTiket extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tiket');
    }

    public function tambah_tiket($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_tiket($where,$table){
        return $this->db->get_where($table,$where);
    }
    
    public function update_tiket($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_tiket($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id', $id)
                            ->limit(1)
                            ->get('tiket');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_tiket($id)
    {
        $result = $this->db->where('id', $id)->get('tiket');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }

}