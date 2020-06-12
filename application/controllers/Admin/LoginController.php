<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index(){
		show_form('login_form');
    }

    public function login(){
        $validate_rules=array(
            array(
                'field'=>'username',
                'rules'=>'required',
                'errors'=>array(
                    'required'=>'Username required'
                )
            ),
            array(
                'field'=>'password',
                'rules'=>'required',
                'errors'=>array(
                    'required'=>'Password required'
                )
            )
        );
        $this->form_validation->set_rules($validate_rules);
        if($this->form_validation->run()==FALSE){
            redirect('login');
        }
        else{
            $un=$this->input->post('username');
            $pw=$this->input->post('password');
            if(Admin::session_create($un,$pw)=='SessionNotCreated'){
                $this->session->set_flashdata('error','Invalid User');
                redirect('login');
            }
            else{
                redirect('menu');
            }
        }
    }
}
