<?php require('header.php'); ?>

	<div class="container margin-top-fix">

		<div class="row">

			<div class="col-md-offset-1 col-md-10">

				<div class="row">

					<div class="col-md-4">

							<div class="media">

								<div class="pull-left avatar">
									<img src="<?php echo $user[0]->avatar; ?>"class="img-rounded img-responsive"></img>
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

							<?php if($profil['id'] != $user[0]->user_id): ?>

								<?php if( empty($follow) ): ?>

									<div class="text-center">
										<form method="POST" action="<?php echo base_url() ?>index.php/follow/<?php echo $user[0]->user_id; ?>">
											<button type="submit" class="btn btn-primary follow">
												<span class="glyphicon glyphicon-plus"></span> Follow
											</button>
										</form>
									</div>

							<?php else: ?>

									<div class="text-center">
										<form method="POST" action="<?php echo base_url() ?>index.php/unfollow/<?php echo $user[0]->user_id; ?>">
											<button type="submit" class="btn btn-danger follow">
												<span class="glyphicon glyphicon-plus"></span> Unfollow
											</button>
										</form>
									</div>

							<?php 
								endif;
							endif;
							?>


							<ul class="list-unstyled feed-menu">

								<li>
									<span class="glyphicon glyphicon-comment"></span> <a href="<?php echo site_url().'/messages/conversation/'.$user[0]->user_id; ?>">Send a message</a>
								</li>

							</ul>

					</div>

					<div class="col-md-8 timeline border-radius-all">

						<div class="timeline-menu">

							<ul class="list-unstyled list-inline">

								<li><a href="<?php echo site_url().'/profile/'.$user[0]->user_id; ?>"><span class="glyphicon glyphicon-calendar"></span> Timeline</a></li>
								<li><a href="<?php echo site_url().'/about/'.$user[0]->user_id; ?>"><span class="glyphicon glyphicon-user"></span> About</a></li>
								<li><a href><span class="glyphicon glyphicon-picture"></span> Photos</a></li>

							</ul>

						</div>

						<?php if($profil['id'] == $user[0]->user_id){ ?>

							<div class="profile-share-form border-radius-all tab_wrap">

								<ul class="tabs">
							      <li><a name="tab" id="tab_1" href="javascript:void(0)" onClick="tabs(1)" class="active">Status</a></li>
							      <li><a name="tab" id="tab_2" href="javascript:void(0)" onClick="tabs(2)">Photo</a></li>
							    </ul>

 								<div name="tab_content" id="tab_content_1" class="tab_content active">

									<form method="POST" action="<?php echo base_url(); ?>index.php/new_update" enctype="multipart/form-data">
										<textarea name="postContent" class="text-form" placeholder="What's on your mind?" rows=5></textarea>
										<button type="submit" class="btn btn-primary">Share</button>
									</form>

								</div>

 								<div name="tab_content" id="tab_content_2" class="tab_content">

									<form method="POST" action="<?php echo base_url(); ?>index.php/new_update_photo" enctype="multipart/form-data">
										<textarea name="postContent" class="text-form" placeholder="What's on your mind?" rows=5></textarea>
										<button type="submit" class="btn btn-primary">Share</button>
										<input type="file" name="userfile" class="btn btn-primary">Add photo
									</form>

								</div>

							</div>

						<?php 
						}
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

											<p>

												<?php 
													echo $post->postContent;
													if ($post->postImage != ''):?>

														<div class="text-center">
															<img src="<?php echo base_url().'uploads/'.$post->postImage; ?>" class="image-post">
														</div>

													<?php
													endif;

												 ?>


											</p>

										</div>

									</div>

								</div>

								<div class="timeline-post-comments">

									<ul class="list-inline">
										<li><a href>Comments</a></li>
										
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
