<?php

defined('BASEPATH') OR exit('no direct script access allowed');

# define guzzle
// use GuzzleHttp\Client;

class User_model extends CI_Model {

    // public function cekUser($user){

    //     $this->db->select('*');
    //     $this->db->from('tb_user');
    //     $this->db->where('username', $user);
    //     $this->db->limit(1);

    //     $query = $this->db->get();

    //     if($query-> num_rows()==1){
    //         return $query->result();
    //     }else{
    //         return false;
    //     }
    // }
    // public function cekLogin($user,$pass){

    //     $this->db->select('*');
    //     $this->db->from('tb_user');
    //     $this->db->where('username', $user);
    //     $this->db->where('password', $pass);
    //     $this->db->limit(1);
    //     $query = $this->db->get();
    //     if($query-> num_rows()==1){
    //         return $query->result();
    //     }else{
    //         return false;
    //     }
    // }

    public function login($post){

        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        // $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }


}