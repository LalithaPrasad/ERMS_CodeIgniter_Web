<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DeleteEmployeeController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(Admin::session_live()=='InvalidSession'){
            $this->session->set_flashdata('error','Invalid user');
            redirect('login');
        }
    }

    public function index(){
        show_form('delete_employee_form');
    }

    public function delete_employee(){
        $validate_rules=array(
            array(
                'field'=>'id',
                'rules'=>'required|numeric',
                'errors'=>array(
                    'required'=>'Employee id required',
                    'numeric'=>'Employee id must be number'
                )
            )
        );
        $this->form_validation->set_rules($validate_rules);
        if($this->form_validation->run()==FALSE){
            redirect('delete_employee');
        }
        else{
            $id=$this->input->post('id');
            if(Employee::delete($id)=='EmployeeDeleted'){
                $this->session->set_flashdata('message','Employee deleted');
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
