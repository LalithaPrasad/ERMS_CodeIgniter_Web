<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddEmployeeController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(Admin::session_live()=='InvalidSession'){
            $this->session->set_flashdata('error','Invalid user');
            redirect('login');
        }
    }
    public function index(){
        show_form('add_employee_form');
    }

    public function add_employee(){
        $validate_rules=array(
            array(
                'field'=>'name',
                'rules'=>'required',
                'errors'=>array(
                    'required'=>'Employee name required'
                )
            ),
            array(
                'field'=>'age',
                'rules'=>'required|numeric',
                'errors'=>array(
                    'required'=>'Employee age required',
                    'numeric'=>'Employee age must be number'
                )
            ),
            array(
                'field'=>'ed',
                'rules'=>'required',
                'errors'=>array(
                    'required'=>'Employee education required'
                )
            ),
            array(
                'field'=>'role',
                'rules'=>'required',
                'errors'=>array(
                    'required'=>'Employee role required'
                )
            )
        );
        $this->form_validation->set_rules($validate_rules);
        if($this->form_validation->run()==false){
            redirect('add_employee');
        }
        else{
            $n=$this->input->post('name');
            $a=$this->input->post('age');
            $e=$this->input->post('ed');
            $r=$this->input->post('role');
            if(Employee::add($n,$a,$e,$r)=='EmployeeAdded'){
                $this->session->set_flashdata('message','Employee added');
                redirect('menu');
            }
            else{
                $this->session->set_flashdata('error','Something wrong');
                redirect('logout');
            }
        }
    }
}
?>
