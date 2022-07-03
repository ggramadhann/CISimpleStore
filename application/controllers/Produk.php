<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {


	public function index()
	{
        $this->load->model('Produk_model');
        $data = $this->Produk_model->get_all_produk();
        // $id = 3;
        // $produkbyid = $this->Produk_model->get_produk_id($id);
        // echo json_encode($produkbyid, true);
        // 
        $array = json_decode(json_encode($data), FALSE);
        // var_dump($array);
        print_r($array);

        // $secretkey = 'xnd_development_P9cVv6lMVPHDXh6sTzeGrYcBRvB6cLhmCchNRWFAt76saEhr9F5naHiRX9aS8Vi';
        //         $p = base64_encode($secretkey);
        // echo $p;
	}
}
