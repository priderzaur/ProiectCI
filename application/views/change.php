<?php require('header.php'); ?>

	<div class="container margin-top-fix">

		<div class="col-md-offset-1 col-md-10">

			<div class="row">

				<div class="timeline timeline-setings border-radius-all">

					<form method="POST" action="<?php echo base_url() ?>index.php/change">

						<?php echo form_error('email'); ?>
						<h4>Work</h4>
						<h6>Add your workplace</h6>
						<div class="grupare">
							<input type="text" class="form-control" name="work" value="<?php echo $info[0]->work; ?>">
							<input type="text" class="form-control" name="work_position" value="<?php echo $info[0]->work_position; ?>" placeholder="Your position">
							<input type="text" class="form-control" name="work_start" value="<?php echo $info[0]->work_start; ?>" placeholder="Started">
							<input type="text" class="form-control" name="work_end" value="<?php echo $info[0]->work_end; ?>" placeholder="End">
						</div>
					

						<input type="text" class="form-control" name="school" value="<?php echo $info[0]->school; ?>">
						<input type="text" class="form-control" name="school_start" value="<?php echo $info[0]->school_start; ?>" placeholder="Started">
						<input type="text" class="form-control" name="school_end" value="<?php echo $info[0]->school_end; ?>" placeholder="End">

						<input type="text" class="form-control" name="birthday" value="<?php echo $info[0]->birthday; ?>" placeholder="End">

						<input type="text" class="form-control" name="hometown" value="<?php echo $info[0]->hometown; ?>" placeholder="End">

						<input type="text" class="form-control" name="current_location" value="<?php echo $info[0]->current_location; ?>" placeholder="End">

						<input type="text" class="form-control" name="email" value="<?php echo $info[0]->email; ?>" placeholder="End">

						<input type="text" class="form-control" name="relationship" value="<?php echo $info[0]->relationship; ?>" placeholder="End">


						<input type="submit">

					</form>

				</div>

			</div>

		</div>

	</div>

<?php require('footer.php'); ?>