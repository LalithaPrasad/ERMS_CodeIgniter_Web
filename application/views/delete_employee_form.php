<?php
echo form_open('delete_employee',array('name'=>'delete_employee_form','novalidate'=>''));
echo form_fieldset('Delete employee');
echo str_repeat('<br />',1);
echo form_input('id','',array('type'=>'number','placeholder'=>'Enter id to delete','autofocus'=>''));
echo str_repeat('<br />',2);
echo form_submit('','Delete');
echo str_repeat('<br />',1);
echo form_fieldset_close();
echo form_close();
?>
