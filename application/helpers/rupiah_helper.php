<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


// if (!function_exists('rupiah')) {
    function rupiah($angka){
        $nominal = number_format($angka, 3, '', '.000');
        // $nominal = number_format($angka, 0, '', '.');
        $format = $nominal;
        // $format = 'Rp '.$nominal;
        return $format;
    }
// }