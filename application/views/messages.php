<?php require('header.php'); ?>

	<div class="container margin-top-fix">

		<div class="row">

			<div class="col-md-offset-1 col-md-10">

				<div class="row">

					<div class="col-md-4">

						<ul class="list-unstyled">
							<li><a href>Sent</a></li>
							<li><a href>Received</a></li>
						</ul>

					</div>

					<div class="col-md-8 timeline border-radius-all">

							<?php foreach($conversations as $conversation): ?>

									<!-- For Received Messages -->
									<div class="row messages">

										<div class="col-md-2">
											<img src="<?php echo base_url().'uploads/'.$conversation->avatar; ?>" class="image-responsive image-post">
										</div>

										<div class="col-md-10">
											<h4>
												<a href="<?php echo site_url().'/messages/conversation/'.$conversation->user_id; ?>">
													<?php echo $conversation->firstName.' '.$conversation->lastName; ?>
												</a>
												<small><?php echo $conversation->date; ?></small>
											</h4>
											<h6><?php echo $conversation->reply; ?></h6>
										</div>

									</div>

							<?php endforeach; ?>
						
					</div>

				</div>

			</div>

		</div>

	</div>

<?php require ('footer.php'); ?>
	