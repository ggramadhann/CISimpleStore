<?php

defined('BASEPATH') OR exit('no direct script access allowed');

# define guzzle
// use GuzzleHttp\Client;

class Cart_model extends CI_Model {

    public function insertData($data){
        // store data customer
        $this->db->insert('tb_cart', $data);
    }


}