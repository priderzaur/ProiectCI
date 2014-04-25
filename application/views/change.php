<?php require('header.php'); ?>

	<div class="container margin-top-fix">

		<div class="col-md-offset-1 col-md-10">

			<div class="row">

				<div class="timeline timeline-setings border-radius-all">

					<form method="POST" action="<?php echo base_url() ?>index.php/change">

						<?php echo form_error('email'); ?>
						<h4>Work</h4>
						<input type="text" class="form-control" name="work" value="<?php echo $info[0]->work; ?>"><br>
						<input type="text" class="form-control" name="work_position" value="<?php echo $info[0]->work_position; ?>" placeholder="Your position"><br>
						<input type="text" class="form-control" name="work_start" value="<?php echo $info[0]->work_start; ?>" placeholder="Started"><br>
						<input type="text" class="form-control" name="work_end" value="<?php echo $info[0]->work_end; ?>" placeholder="End"><br>

						<h4>Education</h4>
						<input type="text" class="form-control" name="school" value="<?php echo $info[0]->school; ?>"><br>
						<input type="text" class="form-control" name="school_start" value="<?php echo $info[0]->school_start; ?>" placeholder="Started"><br>
						<input type="text" class="form-control" name="school_end" value="<?php echo $info[0]->school_end; ?>" placeholder="End"><br>


						<h4>Birthday</h4>
						<input type="text" class="form-control" name="birthday" value="<?php echo $info[0]->birthday; ?>" placeholder="End"><br>

						<h4>Hometown</h4>
						<input type="text" class="form-control" name="hometown" value="<?php echo $info[0]->hometown; ?>" placeholder="End"><br>

						<h4>Current Location</h4>
						<input type="text" class="form-control" name="current_location" value="<?php echo $info[0]->current_location; ?>" placeholder="End"><br>

						<h4>Email</h4>
						<input type="text" class="form-control" name="email" value="<?php echo $info[0]->email; ?>" placeholder="End"><br>

						<h4>Relationship</h4>
						<input type="text" class="form-control" name="relationship" value="<?php echo $info[0]->relationship; ?>" placeholder="End"><br>


						<input type="submit">

					</form>

				</div>

			</div>

		</div>

	</div>

<?php require('footer.php'); ?>