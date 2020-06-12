<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Model{

    private static $CI;

    public function __construct(){
        parent::__construct();
        self::$CI=&get_instance();
    }

    public static function add($name,$age,$ed,$role){
        $data=array(
            'name'=>$name,
            'age'=>$age,
            'ed'=>$ed,
            'role'=>$role
        );
        self::$CI->db->insert('employee',$data);
        return 'EmployeeAdded';
    }

    public static function delete($id){
        self::$CI->db->where('id',$id);
        self::$CI->db->delete('employee');
        return 'EmployeeDeleted';
    }

    public static function modify($id,$ed,$role){
        $data=array();
        if($ed!=NULL)$data['ed']=$ed;
        if($role!=NULL)$data['role']=$role;
        self::$CI->db->where('id',$id);
        self::$CI->db->update('employee',$data);
        return 'EmployeeModified';
    }

    public static function get(){
        return self::$CI->db->get('employee');
    }
}
?>
