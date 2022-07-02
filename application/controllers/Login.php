<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    // public function ___construct(){
    //     parent::__construct();
    //     $this->load->model('User_model');
    //     $this->load->library('session');
    // }

	public function index()
	{
		$data = array(
			'title'=>'Login',
			'isi' => 'auth/v_login',
		);
		$this->load->view('layout/v_wrap_login',$data);
	}

    public function proses(){
        $post = $this->input->post(null, TRUE);

        if(isset($post['login'])){
            $this->load->model('User_model');
            $query = $this->User_model->login($post);

            if($query->num_rows()>0){
                $row = $query->row();
                // $params = array(
                //     'username' => $row->username,
                //     'nama' => $row->nama,
                //     'level' => $row->level,
                //     'status' => $row->status,
                // );
                // $this->session->set_userdata($params);
                // echo "<script>alert('login gagal!');</script>";
                // redirect('Home','refresh');
                // echo "
                // <script>
                //     alert('selamat, berhasil login!');
                //     window.location='".base_url('Home')."';
                // '</script>";

                echo $row->username;
                    // echo "login berhasil";
            }else{
                // echo "<script>alert('login gagal!');</script>";
                // redirect('Login','refresh');
                // echo "
                // <script>
                //     alert('login gagal!');
                //     window.location='".base_url('Login')."';
                // '</script>";
                echo "login gagal";
    //             
            }
        }
    }

    // public function proses_login(){
    //     $user = $this->input->post('username');
    //     $pass = md5($this->input->post('password'));

    //     $cekUser = $this->User_model->cekUser($user);

    //     if($cekUser){
    //         $cekLogin = $this->User_model->cekLogin($user,$pass);

    //         foreach($cekLogin as $row);

    //         if(($row->status)=="Aktif"){
    //             $this->session->set_userdata('username', $row->username);
    //             $this->session->set_userdata('nama', $row->nama);
    //             $this->session->set_userdata('level', $row->level);
    //             $this->session->set_userdata('status', $row->status);
                
    //             if($this->session->userdata('level')=="Admin"){
    //                 redirect('Home','refresh');
    //             }elseif($this->session->userdata('level')=="User"){
    //                 redirect('Home','refresh');

    //             }else{
    //                 $this->session->session_destroy();
    //                 echo "<script>alert('anda tidak memiliki akses masuk!');document.location='index'</script>";
    //             }
    //         }else{
    //             echo "<script>alert('akun anda belum aktif!');</script>";
    //             redirect('Login','refresh');
    //         }
    //     }else{
    //         echo "<script>alert('akun tidak ada silahkan registrasi!');</script>";
    //         redirect('Login','refresh');
    //     }
    // }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url("home"));
    }
}
