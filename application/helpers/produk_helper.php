<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

# define guzzle
use GuzzleHttp\Client;

function produk_helper() 
{    
    // $ci = &get_instance();

    // //load the session library
    // $ci->load->library('session');

    $client = new \GuzzleHttp\Client([
        'base_uri' => 'https://fakestoreapi.com',
        'headers' => [
            'Content-type' => 'application/json',
            // 'Authorization' => "Bearer {$auth_token}"
        ]
    ]);

    return $client;
}