<?php
defined('BASEPATH') or exit('No direct script access allowed');
if(!function_exists('show_form')){
    function show_form($form){
        $ci=&get_instance();
        $ci->load->view('header');
        $ci->load->view($form);
        $ci->load->view('footer');
    }
}
?>
