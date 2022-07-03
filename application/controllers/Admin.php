

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Xendit\Xendit;

class Admin extends CI_Controller {

	public function index()
	{
        $xenApi = 'xnd_development_sL1l1Rskb2kAEGRBuDELV7Fyu6VxDrIlPgx7VkWQUCeJ8vRbCArOTqNcdYtHE';
        Xendit::setApiKey($xenApi);
        
		$params = [
            'types' => 'DISBURSEMENT',
            'for-user-id' => 'Your User Id', //Optional
            'query-param'=> 'true'
        ];
        
        $dataTransaksi = \Xendit\Transaction::list(array($params));
        // $array = json_decode(json_encode($dataTransaksi));

        // print_r(array_slice($dataTransaksi,0,4));

        $data = array(
            'title'=>'Admin - Data Transaksi',
           'isi' => 'admin/v_dashboard',
           'result' => $dataTransaksi
       );
       $this->load->view('layout/v_wrap_back',$data);  
	}
}
