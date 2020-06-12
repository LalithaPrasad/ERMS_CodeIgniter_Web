<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_Employee extends CI_Migration{

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
            'name'=>array(
                'type'=>'VARCHAR',
                'constraint'=>100
            ),
            'age'=>array(
                'type'=>'INT'
            ),
            'ed'=>array(
                'type'=>'VARCHAR',
                'constraint'=>100
            ),
            'role'=>array(
                'type'=>'VARCHAR',
                'constraint'=>100
            )
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id',TRUE);
        $this->dbforge->create_table('employee');
    }

    public function down(){
        $this->dbforge->drop_table('employee');
    }
}
?>
