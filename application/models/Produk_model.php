<?php

defined('BASEPATH') OR exit('no direct script access allowed');

# define guzzle
use \GuzzleHttp\Client;


class Produk_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->helper('produk_helper');
        // $this->load->helper('login_helper');
    }

    public function get_all_produk(){
        try {
            
            $request = produk_helper()->request("GET", "products", [
                'http_errors' => false,    
            ]);
            
            $status_code = $request->getStatusCode();

            // if($status_code == 401) {
            //     return check_if_logged_In($status_code);
            // }

            $data = $request->getBody()->getContents();

            $data = json_decode($data, TRUE);

            return $data;

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
       
    }

    public function get_produk_id($idProduk)
    {
        try {
            
            $request = produk_helper()->request("GET", "products/{$idProduk}", [
                'http_errors' => false,    
            ]);
            
            $status_code = $request->getStatusCode();

            // if($status_code == 401) {
            //     return check_if_logged_In($status_code);
            // }

            $data = $request->getBody()->getContents();

            $data = json_decode($data, TRUE);

            return $data;

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
      
    }


}