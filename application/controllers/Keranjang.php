<?php
defined('BASEPATH') or exit('No direct script access allowed');


use Xendit\Xendit;

class Keranjang extends CI_Controller
{


	public function checkout()
	{
		// handle data dari pesan sekarang via home
		$id = $this->uri->segment(3, 0);
		$produkbyid = $this->Produk_model->get_produk_id($id);
		$array = json_decode(json_encode($produkbyid), FALSE);

		// print_r($array);


		$data = array(
			'title' => 'Keranjang - Checkout',
			'isi' => 'v_keranjang',
			'result' => array($array)
		);
		$this->load->view('layout/v_wrap_front', $data);

		//todo store data ke db mysql

		//todo create invoice

	}

	public function storedata()
	{
		// handle data dari checkout barang
		try {
			// $id = $this->uri->segment(3,0);
			// $produkbyid = $this->Produk_model->get_produk_id($id);
			// $this->Cart_model->storeData();
			// $array = json_decode(json_encode($produkbyid), FALSE);

			// print_r($array->title); // untuk order_id
			// print_r($array->price); // untuk amount butuh di convert dulu
			$post = $this->input->post();
			if (isset($post['checkout'])) {
				// $id = $this->input->post['idx'];
				// $tt = $this->input->post['tt'];
				// $hg = $this->input->post['hg'];
				// $cate = $this->input->post['cate'];

				// $namaD = $this->input->post['namaDepan'];
				// $namaB = $this->input->post['namaBelakang'];
				// $email = $this->input->post['email'];
				// $tlp = $this->input->post['noTlp'];
				// $negara = $this->input->post['negara'];
				// $provisi = $this->input->post['provinsi'];
				// $kota = $this->input->post['kota']; 
				// $kodepos = $this->input->post['kodePos'];
				// $alamat = $this->input->post['alamat'];

				//insert data
				// if(isset($_POST['checkout'])){
				// 	$data = [
				// 		'' => $,
				// 		'' => $,
				// 		'' => $,
				// 		'' => $,
				// 		'' => $,
				// 		'' => array(
				// 			= $,
				// 		)
				// 	]
				// }

				//create invoice

				$invoice_id = 'Invoice_Demo_' . date('YmdHis');
				// 	$request->merge([
				// 		'order_id' => $order_id,
				// 		'amount' => 125000,
				// 		'description' => 'Pembelian Kamus Laravel 2022',
				// 	]);
				// 	Cart::create($request->all());
				// 	DB::commit();

				// try{
				$xenApi = 'xnd_development_sL1l1Rskb2kAEGRBuDELV7Fyu6VxDrIlPgx7VkWQUCeJ8vRbCArOTqNcdYtHE';
				Xendit::setApiKey($xenApi);

				$params = [
					'external_id' => $invoice_id,
					'payer_email' => $post['email'],
					'amount' => $post['hg'],
					'description' => 'Pembelian Barang di Simple Store',
					'invoice_duration' => 86400,
					'customer' => [
						'given_names' => $post['namaDepan'],
						'surname' => $post['namaBelakang'],
						'email' => $post['email'],
						'mobile_number' => $post['noTlp'],
						'address' => [
							[
								'city' => $post['kota'],
								'country' => $post['negara'],
								'postal_code' => $post['kodePos'],
								'state' => $post['provinsi'],
								'street_line1' => $post['alamat'],
								'street_line2' => ''
							]
						]
					],
					// 'customer_notification_preference' => [
					// 	'invoice_created' => [
					// 		'whatsapp',
					// 		'sms',
					// 		'email',

					// 	],
					// 	'invoice_reminder' => [
					// 		'whatsapp',
					// 		'sms',
					// 		'email',

					// 	],
					// 	'invoice_paid' => [
					// 		'whatsapp',
					// 		'sms',
					// 		'email',

					// 	],
					// 	'invoice_expired' => [
					// 		'whatsapp',
					// 		'sms',
					// 		'email',

					// 	]
					// ],
					'success_redirect_url' => '',
					'failure_redirect_url' => '',
					'currency' => 'IDR',
					'items' => [
						[
							// 'name' => '',
							'name' => $post['tt'],
							'quantity' => 1,
							'price' => $post['hg'],
							'category' => $post['cate'],
							'url' => base_url()
						]
					],
					'fees' => [
						[
							'type' => 'ADMIN',
							'value' => 0
						]
					]
				];
			} // end isset post
			$createInvoice = \Xendit\Invoice::create($params);
			var_dump($createInvoice);
			//redirect ke invoice_url
			// return Redirect($createInvoice['invoice_url']);

		} catch (\Exception $ex) {
			// DB::rollBack();
			// return redirect()->back()->with('status', $ex->getMessage());
		}
	}




	public function tes_post()
	{
		$post = $this->input->post();
		if (isset($post['checkout'])) {
			$invoice_id = 'Invoice_Demo_' . date('YmdHis');
			/// hanya untuk test beerhasil
			Xendit::setApiKey('xnd_development_sL1l1Rskb2kAEGRBuDELV7Fyu6VxDrIlPgx7VkWQUCeJ8vRbCArOTqNcdYtHE');

			$params = [
				'external_id' => $invoice_id,
				'payer_email' => $post['email'],
				'description' => 'lagi ngetes beli produk nih',
				'amount' => $post['hg'],
				'items' => [
					[
						// 'image' => $post['img'],
						'name' => $post['tt'],
						'quantity' => 1,
						'price' => $post['hg'],
						'category' => $post['cate'],
						'url' => base_url()
					]
				],
				'fees' => [
					[
						'type' => 'ADMIN',
						'value' => 0
					]
				]
			];
		}
		$createInvoice = \Xendit\Invoice::create($params);
		// print_r($createInvoice);
		// echo json_encode($createInvoice);
		return Redirect($createInvoice['invoice_url']);
	}
}
