<?php
echo form_open('login',array('name'=>'login_form', 'novalidate'=>''));
echo form_fieldset('Login');
echo str_repeat('<br />',1);
echo form_input('username', '', array('placeholder'=>'Enter username', 'autofocus'=>''));
echo str_repeat('<br />',2);
echo form_password('password', '', array('placeholder'=>'Enter password'));
echo str_repeat('<br />',2);
echo form_submit('', 'Login');
echo str_repeat('<br />',1);
echo form_fieldset_close();
echo form_close();
?>
<p><a href='signup'>Click here to signup</a></p>
