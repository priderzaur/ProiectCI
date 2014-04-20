<?php require('header.php'); ?>

	<div class="container margin-top-fix">

		<div class="row">

			<div class="col-md-offset-1 col-md-10">

				<div class="row">

					<div class="col-md-4">

							<div class="media">

								<div class="pull-left avatar">
									<img src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-prn2/t1.0-9/1377992_722124137815406_2027553723_n.jpg"class="img-rounded img-responsive"></img>
								</div>

								<div class="large-info">

									<h4>
										<a href="<?php echo base_url(); ?>index.php/profile/<?php echo $user[0]->user_id; ?>">
											<?php echo $user[0]->firstName.' '.$user[0]->lastName; ?>
										</a>
									</h4>

									<h6>
										<ul class="list-unstyled text-muted">
											<li>Iasi, Romania</li>
										</ul>
									</h6>

								</div>

							</div>

							<div class="text-center">
								<button type="button" class="btn btn-primary follow">
									<span class="glyphicon glyphicon-plus"></span> Follow
								</button>
							</div>

							<article>
								<h3>Info</h3>
								
							</article>

					</div>

					<div class="col-md-8 timeline border-radius-all">

						<?php 
						foreach ($update as $post) { ?>

							<div class="timeline-post border-radius-all">

								<div class="container">

									<div class="row">

										<div class="col-md-1 timeline-post-header">

											<div class="mini-avatar">
												
												<img src="<?php echo $user[0]->avatar; ?>" class="img-responsive img-rounded">

											</div>

										</div>

										<div class="col-md-6 timeline-post-content">

											<h5>
												<strong><a href="<?php echo base_url(); ?>index.php/profile/<?php echo $user[0]->user_id; ?>">
													<?php echo $user[0]->firstName.' '.$user[0]->lastName; ?>
												</a></strong>
											</h5>

											<h6 class="text-muted">
												<span class="glyphicon glyphicon-calendar"></span>
												<a href="<?php echo base_url(); ?>index.php/update/<?php echo $post->update_id; ?>"><?php echo $post->dateCreated; ?></a>
											</h6>

											<p><?php echo $post->postContent; ?></p>

										</div>

									</div>

								</div>

								<div class="timeline-post-comments">

									<ul class="list-inline">
										<li><a href>Comments</a></li>
										<?php 

										if ($user[0]->user_id == $update[0]->postedByUserID){ ?>

											<li><a href="<?php echo base_url(); ?>index.php/delete_update/<?php echo $post->update_id; ?>">Delete</a></li>
										
										<?php
										}
										?>
									</ul>

								</div>

							</div>

						<?php
						}
						?>
					</div>


				</div>

			</div>

		</div>

	</div>

<?php require ('footer.php'); ?>
	