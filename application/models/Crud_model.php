<?php

class Crud_model extends CI_model{
    public function getData(){
        $query = $this->db->get('menumakanan');
        return $query->result_array();
    }

    public function tambahData(){
        
        $data = [
            "id" => $this->input->post('id', true),
            "harga" => $this->input->post('harga', true),
            "jenis" => $this->input->post('jenis', true),
            "nama" => $this->input->post('nama', true),
        ];

        $this->db->insert('menumakanan', $data);
    }

    public function hapusData($id){
        $this->db->where('id', $id);
        $this->db->delete('menumakanan');
    }

    public function getSatuanById($id){
        return $this->db->get_where('menumakanan', ['id' => $id])->row_array();
    }

    public function ubahData($id){

        $data = [
            "harga" => $this->input->post('harga', true),
            "jenis" => $this->input->post('jenis', true),
            "nama" => $this->input->post('nama', true),
        ];

        $this->db->where('id', $id);
        $this->db->update('menumakanan', $data);
    }

    public function cariData(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('menumakanan')->result_array();
    }
}