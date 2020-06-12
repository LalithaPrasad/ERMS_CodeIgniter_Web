<?php
echo form_open('add_employee',array('name'=>'add_employee_form','novalidate'=>''));
echo form_fieldset('Add employee');
echo str_repeat('<br />',1);
echo form_input('name','',array('placeholder'=>'Enter name','autofocus'=>''));
echo str_repeat('<br />',2);
echo form_input('age','',array('type'=>'number','placeholder'=>'Enter age'));
echo str_repeat('<br />',2);
echo form_input('ed','',array('placeholder'=>'Enter education'));
echo str_repeat('<br />',2);
echo form_input('role','',array('placeholder'=>'Enter role'));
echo str_repeat('<br />',2);
echo form_submit('','Add');
echo str_repeat('<br />',1);
echo form_fieldset_close();
echo form_close();
?>
