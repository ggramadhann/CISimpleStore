<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

# define guzzle
use \GuzzleHttp\Client;

function client() 
{    
    // $ci = &get_instance();

    // //load the session library
    // $ci->load->library('session');
    
    $secretkey = 'xnd_development_P9cVv6lMVPHDXh6sTzeGrYcBRvB6cLhmCchNRWFAt76saEhr9F5naHiRX9aS8Vi';
    base64_encode($secretkey);

    $client = new \GuzzleHttp\Client([
        'base_uri' => 'https://api.xendit.co',
        'headers' => [
            'Content-type' => 'application/json',
            'Authorization' => "Basic {$secretkey}"
        ]
    ]);

    return $client;
}