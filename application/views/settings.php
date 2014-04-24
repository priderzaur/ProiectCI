<?php require('header.php'); ?>

	<div class="container margin-top-fix">

		<div class="col-md-offset-1 col-md-10">

			<div class="row">

				<div class="timeline timeline-setings border-radius-all">

					<form method="POST" action="<?php echo base_url() ?>index.php/settings">

						<?php echo form_error('email'); ?>
						<label>Change email</label><br>
						<input type="text" name="email" value="<?php echo $user[0]->email; ?>"><br><br>

						<?php echo form_error('newpwd'); ?>
						<label>Change password</label><br>
						<input type="password" name="newpwd" placeholder="Enter a new password"><br><br>

						<label>Enter password</label><br>
						<input type="password" name="confirmpwd" placeholder="Enter the password">
						<br><br>

						<input type="submit">

					</form>

				</div>

			</div>

		</div>

	</div>

<?php require('footer.php'); ?>