
<form method="POST" action="<?php echo base_url() ?>index.php/register">

	<?php echo form_error('email'); ?>
	<label>Name</label><br>
	<input type="text" name="firstName" value="<?php echo set_value('email') ?>" placeholder="firstName"><br><br>
	<input type="text" name="lastName" value="<?php echo set_value('email') ?>" placeholder="lastName"><br><br>

	<label>Email</label><br>
	<input type="text" name="email" value="<?php echo set_value('email') ?>"><br><br>

	<?php echo form_error('password'); ?>
	<label>Password</label><br>
	<input type="password" name="password"><br><br>

	<input type="submit">

</form>