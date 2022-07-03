<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {


    public function checkout()
    {
        // handle data dari pesan sekarang via home
		$id = $this->uri->segment(3,0);
		$produkbyid = $this->Produk_model->get_produk_id($id);
		$array = json_decode(json_encode($produkbyid), FALSE);

		print_r($array);


		$data = array(
			'title'=>'Keranjang - Checkout',
			'isi' => 'v_keranjang',
			'result' => array($array)
		);
        $this->load->view('layout/v_wrap_front',$data);
		
		//todo store data ke db mysql

		//todo create invoice

    }

	public function storedata(){
		// handle data dari ceckout barang
		$id = $this->uri->segment(3,0);
		// $produkbyid = $this->Produk_model->get_produk_id($id);
		// $array = json_decode(json_encode($produkbyid), FALSE);

		print_r($id);

	}
}
