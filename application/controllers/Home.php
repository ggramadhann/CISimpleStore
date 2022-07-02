<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // public function ___construct(){
    //     parent::__construct();
    // }

	public function index()
	{
		$this->load->model('Produk_model');
        // $id = 3;
        // $produkbyid = $this->Produk_model->get_produk_id($id);
        // echo json_encode($produkbyid, true);
        // 
        $data = $this->Produk_model->get_all_produk();

        $array = json_decode(json_encode($data), FALSE);
        // var_dump($array);

		$data = array(
			'title'=>'Home',
			'isi' => 'v_home',
			'result' => $array
		);
		// $data = array(
		// 	'title'=>'Home',
		// 	'isi' => 'v_home',
		// 	'result' => array($array)
		// );
		// $this->load->library('pagination');
		// $config['base_url'] = base_url('home');
		// $config['total_rows'] = $this->Produk_model->get_produk_limit();
		// $config['per_page'] = 6;

		// $this->pagination->initialize($config);
		


		$this->load->view('layout/v_wrap_front',$data);
	}


	public function produk_list(){
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
