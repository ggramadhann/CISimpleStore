<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {


	public function index()
	{
        $this->load->model('Produk_model');
        $data = $this->Produk_model->get_all_produk();
        $id = 3;
        $produkbyid = $this->Produk_model->get_produk_id($id);
        // echo json_encode($produkbyid, true);
        // 
        $array['row'] = json_decode(json_encode($produkbyid), FALSE);
        var_dump($array);
	}
}
