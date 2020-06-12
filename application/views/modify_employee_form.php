<?php
echo form_open('modify_employee',array('name'=>'modify_employee_form','novalidate'=>''));
echo form_fieldset('Modify employee');
echo str_repeat('<br />',1);
echo form_input('id','',array('type'=>'number','placeholder'=>'Enter id to modify','autofocus'=>''));
echo str_repeat('<br />',2);
echo form_input('ed','',array('placeholder'=>'Enter new education or leave blank'));
echo str_repeat('<br />',2);
echo form_input('role','',array('placeholder'=>'Enter new role or leave blank'));
echo str_repeat('<br />',2);
echo form_submit('','Modify');
echo str_repeat('<br />',1);
echo form_fieldset_close();
echo form_close();
?>
