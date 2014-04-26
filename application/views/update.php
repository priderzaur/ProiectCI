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

									<h6>
										<ul class="list-unstyled text-muted">
											<li>Iasi, Romania</li>
										</ul>
									</h6>

								</div>

							</div>

							<?php if($profil['id'] != $user[0]->user_id){ ?>

							<div class="text-center">
								<button type="button" class="btn btn-primary follow">
									<span class="glyphicon glyphicon-plus"></span> Follow
								</button>
							</div>

							<?php } ?>

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
												
												<img src="<?php echo base_url().'uploads/'.$user[0]->avatar; ?>" class="img-responsive img-rounded">

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

										<?php if($profil['id'] == $user[0]->user_id){ ?>

											<li><a href="<?php echo base_url(); ?>index.php/delete_update/<?php echo $post->update_id; ?>">Delete</a></li>
										
										<?php
										}
										?>
									</ul>


									<?php 

									foreach($comments as $comment){ ?>

										<div class="row comment">

											<div class="col-md-1 comment-avatar">
												<div class="mini-avatar-comment">
													<img src="<?php echo $comment->avatar; ?>" class="img-responsive">
												</div>
											</div>

											<div class="col-md-11">
												<h5>
													<a href="<?php echo base_url().'index.php/profile/'.$comment->user_id; ?>">
														<?php echo $comment->firstName.' '.$comment->lastName; ?>
													</a>
													<small><?php echo $comment->date; ?></small>

													<?php 

													if( $profil['id'] == $comment->user_id ): ?>

														<p class="pull-right remove-comment">
															<a href="<?php echo base_url().'index.php/delete_comment/'.$comment->comment_id; ?>">
																<span class="glyphicon glyphicon-remove">
															</a>
														</p>

													<?php

													endif;

													?>
												</h5>
												

												<?php 

													echo $comment->content;

												?>

											</div>

										</div>

									<?php

									}

									?>

									<div class="row comment-form">

		 									<div class="col-md-1 comment-avatar">
												<div class="mini-avatar-comment">
													<img src="<?php echo $profil['avatar']; ?>" class="img-responsive">
												</div>
											</div>

											<div class="col-md-11">

												<form method="POST" action="<?php echo base_url().'index.php/add_comment/'.$post->update_id; ?>" role="form">
													<textarea name="comment" class="text-form" placeholder="Write a comment..."></textarea>
													<button type="submit" class="btn btn-primary">Add Comment</button>
												</form>
											</div>

									</div>

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
	