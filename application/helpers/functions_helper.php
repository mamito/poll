<?php
/**
 * Created by PhpStorm.
 * User: Aimon.M
 * Date: 1/31/2016
 * Time: 11:05 AM
 */
if ( ! function_exists('__Islogin')) {
    function __Islogin()
    {
        $CI =& get_instance();
        $CI->load->library("session");
        if (!$CI->session->userdata('islogin')) {
            redirect('admin/vokemaker/login/');
        }
    }
}
if (! function_exists('checkUser')){
    function checkUser($user,$password){
        $CI =& get_instance();
        $CI->load->library("session");
        $CI->load->model("publicmodel");
        $checkedUser = $CI->publicmodel->login_check($user,$password);
        return $checkedUser;
    }
}
if(! function_exists('getIp')){
    function getIp(){
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}
if(! function_exists('checkIp')){
    function checkIp($ip){
        $CI =& get_instance();
        $CI->load->library("session");
        $CI->load->model("publicmodel");
        $chk_ip = $CI->publicmodel->checkIp($ip);
        if ($chk_ip == 0) {
            return 0;
        }
        else{
            return 1;
        }
    }
}

if(! function_exists('checkCookie')){
    function checkCookie($uid){
        $CI =& get_instance();
        $CI->load->library("session");
        $CI->load->helper('cookie');
        $cookie = get_cookie($uid, true);
        return !empty($cookie);
    }
}

if(! function_exists('cleanIpDb')){
    function cleanIpDb(){
        $time = time();
        $CI =& get_instance();
        $CI->load->library("session");
        $CI->load->model("publicmodel");
        $del_ip = $CI->publicmodel->cleanIp($time);
        return $del_ip;
    }
}
