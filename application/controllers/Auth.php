<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php

Class Auth extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
    }

    public function signUp()
    {
        $data['judul'] = 'Registration Form';
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('confirmpass','Password','required|matches[password]');
        
        if($this->form_validation->run() == FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('auth/register');
        $this->load->view('templates/footer');
    }else{
        if($this->Auth_model->isDuplicate($this->input->post('email'),$this->input->post('username'))){
            $this->session->set_flashdata('flash', 'Email/Username already exists');
            redirect('auth/signup');
        }else{
        $this->Auth_model->tambahUser();
        $this->session->set_flashdata('flash','ditambahkan');
        redirect('home');
    }
    }
    }

    public function login()
    {
        $data['judul'] = 'Login Form';
      $this->load->library('form_validation');
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      if ($this->form_validation->run() === FALSE)
      {
        $this->load->view('templates/header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
      }
      else
      {
        if($this->Auth_model->cekPassword($this->input->post('username',true))){
            $this->session->set_flashdata('flash','login');
            $this->session->set_userdata('username',$this->input->post('username',true));
            redirect("home");
          }
          else{
            $this->session->set_flashdata('flash','gagal login');
            redirect('auth/login');
        }
      }
    }
      
    public function testing(){
        return null;
    }
}