<head>

</head>

<ul>
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<?php 
	$user = $this->session->userdata('user');
	if (!$user) { ?>
	<li><a href="<?php echo base_url('login'); ?>">Login</a></li>
	<li><a href="<?php echo base_url('register'); ?>">Register</a></li>
	<?php } else { 
		echo $user['email'];?>
	<li><a href="<?php echo base_url('new_post'); ?>">New Post</a></li>
	<li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
	<?php } ?>
</ul>