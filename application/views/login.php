<form method="POST" action="<?php echo base_url('login');?>">

	<?php //echo validation_errors(); 
		echo form_error('email');
	?>
	<label>Email</label><br>
	<input type="text" name="email" value="<?php echo set_value('email'); ?>"><br><br>
	<?php 
		echo form_error('password');
	?>
	<label>Password</label><br>
	<input type="password" name="password"><br><br>

	<input type="submit">

</form>