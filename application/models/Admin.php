<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Model{

    private static $CI;

    public function __construct(){
        parent::__construct();
        self::$CI=&get_instance();
    }

    public static function create($un,$pw){
        if(self::$CI->db->count_all('admin')==0){
            $data=array(
                'username'=>$un,
                'password_hash'=>password_hash($pw,PASSWORD_DEFAULT)
            );
            self::$CI->db->insert('admin', $data);
            return 'AdminCreated';
        }
        else{
            return 'AdminExists';
        }
    }

    public static function session_create($un, $pw){
        $result=self::$CI->db->get('admin');
        $row=$result->row();
        if($un==$row->username && password_verify($pw, $row->password_hash)){
            self::$CI->session->set_tempdata('session','live',300);
            return 'SessionCreated';
        }
        else{
            return 'SessionNotCreated';
        }
    }

    public static function session_live(){
        if(self::$CI->session->tempdata('session')){
            return 'ValidSession';
        }
        else{
            return 'InvalidSession';
        }
    }

    public static function session_kill(){
        self::$CI->session->sess_destroy();
    }
}
?>
