<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogoutController extends CI_Controller{

    public function index(){
        Admin::session_kill();
        redirect('login');
    }
}
?>
