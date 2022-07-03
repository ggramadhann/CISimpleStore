<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Xendit\Xendit;
class Api extends CI_Controller {


	public function index()
	{
        /// hanya untuk test beerhasil
        Xendit::setApiKey('xnd_development_sL1l1Rskb2kAEGRBuDELV7Fyu6VxDrIlPgx7VkWQUCeJ8vRbCArOTqNcdYtHE');

        $params = [ 
          'external_id' => 'invoice_demo_1475801962607',
          'payer_email' => 'gilang@tester.com',
          'description' => 'lagi ngetes beli baju',
          'amount' => 10000,
          'items' => [
						[
							// 'name' => '',
							'name' => 'Baju Biru Tes',
							'quantity' => 1,
							'price' => 10000,
							'category' => 'fashion',
							'url' => base_url()
						]
					],
        ];
      
        $createInvoice = \Xendit\Invoice::create($params);
        // print_r($createInvoice);
        // echo json_encode($createInvoice);
        return Redirect($createInvoice['invoice_url']);
      

	}


  // public function index(){
		// $apiKey = 'xnd_development_sL1l1Rskb2kAEGRBuDELV7Fyu6VxDrIlPgx7VkWQUCeJ8vRbCArOTqNcdYtHE';
		// $date = new \DateTime();
    //     $redirectUrl = '';
    //     $defParams = [
    //         'external_id' => 'ci3-checkout-demo-' . $date->getTimestamp(),
    //         'payer_email' => 'invoice+demo@xendit.co', 
    //         'description' => 'Codeigniter 3 Checkout Demo', 
    //         'failure_redirect_url' => $redirectUrl, 
    //         'success_redirect_url' => $redirectUrl
    //     ];

		// $post = [];
		// $data  = json_decode(file_get_contents('php://input'), true);
		// $defParams['failure_redirect_url'] = $data['redirect_url'];
    //     $defParams['success_redirect_url'] = $data['redirect_url'];
		// foreach ($data as $key => $value) {
		// 	$post[$key] = $value;
		// }

		// $params = array_merge($defParams, $post);

		// header('Content-Type: application/json');

		// $response = [];

    //     try {
    //         Xendit::setApiKey($apiKey);

    //         $response = \Xendit\Invoice::create($params);
		// 	var_dump($response);
			
    //     } catch (\Exception $e) {
    //         http_response_code($e->getCode());
    //         $response['message'] = $e->getMessage();
    //     }

        // echo json_encode($response);
	// }

}
