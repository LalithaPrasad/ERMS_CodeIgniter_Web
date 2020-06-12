<fieldset>
    <legend>Display employees</legend>
<?php if($employees->num_rows()>0){ ?>
<table>
    <tr>
        <th>Id</th><th>Name</th><th>Age</th><th>Education</th><th>Role</th>
    </tr>
<?php foreach($employees->result() as $employee){ ?>
<tr>
    <td><?php echo $employee->id ?></td>
    <td><?php echo $employee->name ?></td>
    <td><?php echo $employee->age ?></td>
    <td><?php echo $employee->ed ?></td>
    <td><?php echo $employee->role ?></td>
</tr>
<?php } ?>
</table>
<?php }else{ ?>
    <p>Employee database is empty</p>
<?php } ?>
</fieldset>
<p><a href='menu'>Back to menu</a></p>
