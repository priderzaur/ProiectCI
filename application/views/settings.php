<?php require('header.php'); ?>

	<div class="container margin-top-fix">

		<div class="col-md-offset-1 col-md-10">

			<div class="row">

				<div class="timeline border-radius-all">

					<form method="POST" action="<?php echo base_url() ?>index.php/settings">

						<?php echo form_error('email'); ?>
						<label>Email</label><br>
						<input type="text" name="email" value="<?php echo set_value('email') ?>"><br><br>

						<label>Enter password</label><br>
						<input type="password" name="confirmpwd" value="<?php echo set_value('email') ?>">
						<br><br>

						<input type="submit">

					</form>

				</div>

			</div>

		</div>

	</div>

<?php require('footer.php'); ?>