<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_Admin extends CI_Migration{

    public function __construct(){
        parent::__construct();
        $this->load->dbforge();
    }

    public function up(){
        $fields=array(
            'id'=>array(
                'type'=>'INT',
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ),
            'username'=>array(
                'type'=>'VARCHAR',
                'constraint'=>64,
                'unique'=>TRUE
            ),
            'password_hash'=>array(
                'type'=>'VARCHAR',
                'constraint'=>256,
                'unique'=>TRUE
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id',TRUE);
        $this->dbforge->create_table('admin');
    }

    public function down(){
        $this->dbforge->drop_table('admin');
    }
}
?>
