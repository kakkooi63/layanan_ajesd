<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bypasserror
{
    public function tamper($uname,$ip)
    {
        $data = '';
        $data .= 'Gagal error terdeteksi <br><b>IP : ';
        $data .= $ip;
        $data .= '<br>Method :';
        $data .= 'Tamper Data<br>User : ';
        $data .= $uname;
        $data .= '<br>Time : ';
        $data .= date('d-m-Y H:i:s');
        $data .= '</b><br> Segala aktivitas mencurigakan akan di rekam dan dikenakan sanksi/pidana';

        return $data;
    }
    public function direct($uname,$ip)
    {
        $data = '';
        $data .= 'Gagal error terdeteksi <br><b>IP : ';
        $data .= $ip;
        $data .= '<br>Method :';
        $data .= 'Direct URI / Manipulate<br>User : ';
        $data .= $uname;
        $data .= '<br>Time : ';
        $data .= date('d-m-Y H:i:s');
        $data .= '</b><br> Segala aktivitas mencurigakan akan di rekam dan dikenakan sanksi/pidana';

        return $data;
    }
} 
