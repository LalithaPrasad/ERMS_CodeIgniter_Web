<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SignupController extends CI_Controller{

    public function index(){
        show_form('signup_form');
    }

    public function signup(){
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
            ),
            array(
                'field'=>'password1',
                'rules'=>'required|matches[password]',
                'errors'=>array(
                    'required'=>'Passwords must match'
                )
            )
        );
        $this->form_validation->set_rules($validate_rules);
        if($this->form_validation->run()==FALSE){
            redirect('signup');
        }
        else{
            $un=$this->input->post('username');
            $pw=$this->input->post('password');
            if(Admin::create($un,$pw)=='AdminExsits'){
                $this->session->set_flashdata('error','Admin already created');
                redirect('login');
            }
            else{
                $this->session->set_flashdata('message','Admin created. Login now');
                redirect('login');
            }
        }
    }
}
?>
