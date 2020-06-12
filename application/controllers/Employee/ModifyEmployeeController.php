<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModifyEmployeeController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(Admin::session_live()=='InvalidSession'){
            $this->session->set_flashdata('error','Invalid user');
            redirect('login');
        }
    }

    public function index(){
        show_form('modify_employee_form');
    }

    public function modify_employee(){
        $validate_rules=array(
            array(
                'field'=>'id',
                'rules'=>'required',
                'errors'=>array(
                    'required'=>'Employee id required'
                )
            )
        );
        $this->form_validation->set_rules($validate_rules);
        if($this->form_validation->run()==FALSE){
            redirect('modify_employee');
        }
        else{
            $id=$this->input->post('id');
            $ed=$this->input->post('ed');
            $role=$this->input->post('role');
            if(Employee::modify($id,$ed,$role)=='EmployeeModified'){
                $this->session->set_flashdata('message','Employee modified');
                redirect('menu');
            }
            else{
                $this->session->set_flashdata('error','Somthing wrong');
                redirect('logout');
            }
        }
    }
}
?>
