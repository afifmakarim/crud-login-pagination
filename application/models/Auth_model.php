<?php

class Auth_model extends CI_model{

    public function tambahUser(){
        $data = [
            "username" => $this->input->post('username', true),
            "email" => $this->input->post('email', true),
            "password" => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
        ];

        $this->db->insert('admin', $data);
    }

    public function isDuplicate($email,$username)
    {     
        $this->db->get_where('admin', array('username' => $username,'email' => $email), 1);
        return $this->db->affected_rows() > 0 ? TRUE : FALSE;         
    }

    public function cekPassword($username)
    {
        $this->db->select('password');
        $this->db->where('username',$username);
        $query = $this->db->get('admin');
        return $query->row();
    }
  

}