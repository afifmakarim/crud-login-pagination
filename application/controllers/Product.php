<?php

class Product extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Crud_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Database Content';
        $data['isi'] = $this->Crud_model->getData();
        if($this->input->post('keyword')){
            $data['isi'] = $this->Crud_model->cariData();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('data/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data';
        $this->form_validation->set_rules('1','Id');
        $this->form_validation->set_rules('harga','Harga','required');
        $this->form_validation->set_rules('jenis','Jenis','required');
        $this->form_validation->set_rules('nama','Nama','required');

        if($this->form_validation->run() == FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('data/tambah');
        $this->load->view('templates/footer');
    }else{
        $this->Crud_model->tambahData();
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('product');
    }
    }

    public function hapus($id){
        $this->Crud_model->hapusData($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('product');
    }

    public function details($id){
        $data['judul'] = 'Data Details';
        $data['satuan'] = $this->Crud_model->getSatuanById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('data/details', $data);
        $this->load->view('templates/footer');

    }

    public function ubah($id){
        
        $data['judul'] = 'Form Ubah Data';
        $data['satuan'] = $this->Crud_model->getSatuanById($id);
        $data['harga'] = ['5000','2000','3200','4600','5233'];

        $this->form_validation->set_rules('harga','Harga','required');
        $this->form_validation->set_rules('jenis','Jenis','required');
        $this->form_validation->set_rules('nama','Nama','required');

        if($this->form_validation->run() == FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('data/ubah', $data);
        $this->load->view('templates/footer');
        }else{
            $this->Crud_model->ubahData($id);
            $this->session->set_flashdata('flash','Diubah');
            redirect('product');
        }
    }
}
