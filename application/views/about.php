<?php require('header.php'); ?>

	<div class="container margin-top-fix">

		<div class="row">

			<div class="col-md-offset-1 col-md-10">

				<div class="row">

					<div class="col-md-4">

							<div class="media">

								<div class="pull-left avatar">
									<img src="<?php echo base_url().'uploads/'.$user[0]->avatar; ?>"class="img-rounded img-responsive"></img>
								</div>

								<div class="large-info">

									<h4>
										<a href="<?php echo base_url(); ?>index.php/profile/<?php echo $user[0]->user_id; ?>">
											<?php echo $user[0]->firstName.' '.$user[0]->lastName; ?>
										</a>
									</h4>

									<?php if( $infos ) : ?>

									<h6>
										<ul class="list-unstyled text-muted">
											<li><?php echo $infos[0]->current_location; ?></li>
										</ul>
									</h6>

									<?php endif;?>

								</div>

							</div>

							<?php if($profil['id'] != $user[0]->user_id){ ?>
								<div class="text-center">
									<form method="POST" action="<?php echo base_url() ?>index.php/follow/<?php echo $user[0]->user_id; ?>">
										<button type="submit" class="btn btn-primary follow">
											<span class="glyphicon glyphicon-plus"></span> Follow
										</button>
									</form>
								</div>
							<?php
							}
							?>

					</div>

					<div class="col-md-8 timeline border-radius-all">

						<div class="timeline-menu">

							<ul class="list-unstyled list-inline">

								<li><a href="<?php echo site_url().'/profile/'.$user[0]->user_id; ?>"><span class="glyphicon glyphicon-calendar"></span> Timeline</a></li>
								<li><a href="<?php echo site_url().'/about/'.$user[0]->user_id; ?>"><span class="glyphicon glyphicon-user"></span> About</a></li>

							</ul>

						</div>

						<div class="about-div">

							<?php if($profil['id'] == $user[0]->user_id): ?>

								<div class="col-md-12">
									<a class="pull-right" href="<?php echo site_url().'/change' ?>">Edit profile</a>
								</div>
							<?php endif; ?>

							<div class="row">

								<div class="col-md-6 column-left">

									<?php if ( $infos[0]->work): ?>

										<h4>Work &amp; Education</h4>
										<strong><?php echo $infos[0]->work; ?></strong>

										<?php if ( $infos[0]->work_position ): ?>
										
											<p><?php echo $infos[0]->work_position; ?>  
												<small class="text-muted">
													<?php echo '('.$infos[0]->work_start.' to '.$infos[0]->work_end.')'; ?>
												</small>
											</p>
										
										<?php endif; ?>

									<?php endif; ?>

									<?php if ( $infos[0]->school ): ?>
										<p>
											<strong><?php echo $infos[0]->school; ?></strong>
											<small class="text-muted">
												<?php echo '('.$infos[0]->school_start.' to '.$infos[0]->school_end.')'; ?>
											</small>
										</p>
									<?php endif; ?>

									<?php if ( $infos[0]->relationship ): ?>
										<h4 class="column-bottom">Relationship</h4>
										<p><?php echo $infos[0]->relationship; ?></p>
									<?php endif; ?>

								</div>

								<div class="col-md-6">
									
									<div class="row column-right">

										<h4>Basic Information</h4>
										<div class="col-md-5">
											<p class="text-muted">Hometown</p>
											<p class="text-muted">Current City</p>
											<p class="text-muted">Birthday</p>
										</div>

										<div class="col-md-7">
											<p><?php echo $infos[0]->hometown; ?></p>
											<p><?php echo $infos[0]->current_location; ?></p>
											<p><?php echo $infos[0]->birthday; ?></p>
										</div>

									</div>

									<div class="row column-right">

										<h4 class="column-bottom">Contact</h4>
										<div class="col-md-5">
											<p class="text-muted">Email</p>
										</div>

										<div class="col-md-7">
											<p><?php echo $infos[0]->email; ?></p>
										</div>

									</div>

								</div>

							</div>
						</div>
						
					</div>

				</div>

			</div>

		</div>

	</div>

<?php require ('footer.php'); ?>
	