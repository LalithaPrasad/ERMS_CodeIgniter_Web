<?php
echo form_open('signup',array('name'=>'signup_form','novalidate'=>''));
echo form_fieldset('Signup');
echo str_repeat('<br />',1);
echo form_input('username','',array('placeholder'=>'Enter username','autofocus'=>''));
echo str_repeat('<br />',2);
echo form_password('password','',array('placeholder'=>'Enter password'));
echo str_repeat('<br />',2);
echo form_password('password1','',array('placeholder'=>'Enter password again'));
echo str_repeat('<br />',2);
echo form_submit('','Signup');
echo str_repeat('<br />',1);
echo form_fieldset_close();
echo form_close();
?>
