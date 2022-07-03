<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Xendit\Xendit;

class Invoice extends CI_Controller {


    public function ___construct(){
        parent::__construct();
        // $this->load->model('User_model');
        // $this->load->library('session');
    }

	public function index()
	{
        $data = array(
			'title'=>'Home',
			'isi' => 'v_invoice',
			// 'result' => $array
		);
        $this->load->view('layout/v_wrap_front',$data);   
	}

    public function store()
    {
          try{
        // DB::beginTransaction();
        //     $order_id = 'kamus_laravel_2022_' . date('YmdHis');
        //     $request->merge([
        //         'order_id' => $order_id,
        //         'amount' => 125000,
        //         'description' => 'Pembelian Kamus Laravel 2022',
        //     ]);
        //     Cart::create($request->all());
        //     DB::commit();
          
            Xendit::setApiKey('XENDIT_SECRET_API_KEY');
            $params = [
                'external_id' => $order_id,
                'amount' => 125000,
                'description' => 'Pembelian Kamus Laravel 2022',
                'invoice_duration' => 86400,
                'customer' => [
                    'given_names' => $request->name,
                    'surname' => $request->last_name,
                    'email' => $request->email,
                    'mobile_number' => $request->phone_number,
                    'address' => [
                        [
                            'city' => $request->city,
                            'country' => $request->country,
                            'postal_code' => $request->postal_code,
                            'state' => $request->state,
                            'street_line1' => $request->street_line1,
                            'street_line2' => ''
                        ]
                    ]
                ],
                'customer_notification_preference' => [
                    'invoice_created' => [
                        'whatsapp',
                        'sms',
                        'email',
                        'viber'
                    ],
                    'invoice_reminder' => [
                        'whatsapp',
                        'sms',
                        'email',
                        'viber'
                    ],
                    'invoice_paid' => [
                        'whatsapp',
                        'sms',
                        'email',
                        'viber'
                    ],
                    'invoice_expired' => [
                        'whatsapp',
                        'sms',
                        'email',
                        'viber'
                    ]
                ],
                'success_redirect_url' => route('success'),
                'failure_redirect_url' => route('failure'),
                'currency' => 'IDR',
                'items' => [
                    [
                        'name' => 'Kamus Laravel 2022',
                        'quantity' => 1,
                        'price' => 125000,
                        'category' => 'Education',
                        'url' => url('/')
                    ]
                ],
                'fees' => [
                    [
                        'type' => 'ADMIN',
                        'value' => 0
                    ]
                ]
            ];
            $createInvoice = \Xendit\Invoice::create($params);
            //redirect to invoice_url
            return Redirect($createInvoice['invoice_url']);
            
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with('status', $ex->getMessage());
        }
    }
}
