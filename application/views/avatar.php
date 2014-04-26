<?php require('header.php'); ?>

	<div class="container margin-top-fix">

		<div class="col-md-offset-1 col-md-10">

			<div class="row">

				<div class="timeline timeline-setings border-radius-all">

					<form method="POST" action="<?php echo base_url(); ?>index.php/set_avatar" enctype="multipart/form-data">
						<input type="file" name="userfile" class="btn btn-primary">Add photo
						<button type="submit" class="btn btn-primary">Share</button>
					</form>

				</div>

			</div>

		</div>

	</div>

<?php require('footer.php'); ?>