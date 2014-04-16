<?php require('header.php'); ?>

<form method="POST" action="<?php echo base_url('new_post'); ?>">

	<?php echo validation_errors(); ?>

	<label>Title</label><br>
	<input type="text" name="title"><br><br>

	<label>Content</label><br>
	<textarea name="content" rows="20" cols="50"></textarea><br><br>

	<input type="submit">

</form>