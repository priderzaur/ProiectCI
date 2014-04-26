<head>

	<meta charset="UTF-8">
	<title>Social Share</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/custom.css">
	<script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url(); ?>assets/jquery/modal.js" type="text/javascript" charset="utf-8"></script>
	

</head>

<body>

<header>
	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="row">

					<div class="col-md-2">

						<a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>assets/logo.png" class="image-responsive logo"></a>

					</div>

					<div class="col-md-3 top-menu pull-right">

						<ul class="list-unstyled list-inline">
									

							<li><input type="submit" value="Login" class="modal-button" data-modal=".login-modal"></li>
							<li><input type="submit" value="Register" class="modal-button" data-modal=".register-modal"></li>

						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<div class="container margin-top-fix">

	<div class="dark-bg">

		<div class="modal login-modal">
			<form method="POST" action="<?php echo base_url() ?>index.php/login">
			<?php //echo form_error('email'); ?>
			<label>Email</label><br>
			<input type="email" name="email" placeholder="Email..." value="<?php echo set_value('email') ?>"><br><br>

			<?php //echo form_error('password'); ?>
			<label>Password</label><br>
			<input type="password" placeholder="Password..." name="password"><br><br>

			<input type="submit" value="Login" class="reglog">
			</form>
			<input type="submit" value="Close" class="close_nou">
		</div>

		<div class="modal register-modal">
			<form method="POST" action="<?php echo base_url() ?>index.php/register">

			<?php //echo form_error('email'); ?>
			<label>Name</label><br>
			<input type="text" name="firstName" value="<?php echo set_value('email') ?>" placeholder="firstName"><br><br>
			<input type="text" name="lastName" value="<?php echo set_value('email') ?>" placeholder="lastName"><br><br>

			<label>Email</label><br>
			<input type="email" name="email" placeholder="Email..." value="<?php echo set_value('email') ?>"><br><br>

			<?php //echo form_error('password'); ?>
			<label>Password</label><br>
			<input type="password" placeholder="Password..." name="password"><br><br>

			<input type="submit" value="Register" class="reglog">
			

			</form>
			<input type="submit" value="Close" class="close_nou">
			
		</div>
	</div>



</div>

</body>