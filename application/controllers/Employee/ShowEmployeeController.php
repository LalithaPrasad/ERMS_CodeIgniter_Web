<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ShowEmployeeController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(Admin::session_live()=='InvalidSession'){
            $this->session->set_flashdata('error','Invalid user');
            redirect('login');
        }
    }

    public function index(){
        $this->load->view('header');
        $this->load->view('show_employees', array('employees'=>Employee::get()));
        $this->load->view('footer');
    }
}
?>
