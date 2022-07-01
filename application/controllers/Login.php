<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function ___construct(){
        parent::__construct();
    }

	public function index()
	{
		$data = array(
			'title'=>'Home',
			'isi' => 'auth/v_login',
		);
		$this->load->view('layout/v_wrap_front',$data);
	}

    public function proses_login(){
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
    }
}
