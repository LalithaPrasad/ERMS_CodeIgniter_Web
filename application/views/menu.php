<?php
$menu=array(
    "<a href='add_employee'>Add employee</a>",
    "<a href='delete_employee'>Delete employee</a>",
    "<a href='modify_employee'>Modify employee</a>",
    "<a href='show_employees'>Show employees</a>",
    "<a href='logout'>Logout</a>"
);
echo form_fieldset('Menu');
echo str_repeat('<br />',1);
echo ul($menu);
echo str_repeat('<br />',1);
echo form_fieldset_close();
?>
