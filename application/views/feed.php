<?php require('header.php'); ?>

	<div class="container margin-top-fix">

		<div class="row">

			<div class="col-md-offset-1 col-md-10">

				<div class="row">

					<div class="col-md-4">

					</div>

					<div class="col-md-8 timeline border-radius-all">

							<div class="profile-share-form border-radius-all">

								<div class="tab-content">

	 								<div class="tab-pane active" id="status">
										<form method="POST" action="<?php echo base_url(); ?>index.php/new_update" role="form">
											<textarea name="postContent" class="text-form" placeholder="What's on your mind?" rows=5></textarea>
											<button type="submit" class="btn btn-primary">Share</button>
											<button type="submit" class="btn btn-primary">Add photo</button>
										</form>
									</div>

								</div>

							</div>

						<?php 
						foreach ($feeds as $feed) { 

							foreach($feed as $post){

								foreach($users as $profile){

									foreach($profile as $user) { 

										if ( $user->user_id == $post->postedByUserID) { ?>

											<div class="timeline-post border-radius-all">

												<div class="container">

													<div class="row">

														<div class="col-md-1 timeline-post-header">

															<div class="mini-avatar">
																
																<img src="<?php echo $user->avatar; ?>" class="img-responsive img-rounded">

															</div>

														</div>

														<div class="col-md-6 timeline-post-content">

															<h5>
																<strong><a href="<?php echo base_url(); ?>index.php/profile/<?php echo $user->user_id; ?>">
																	<?php echo $user->firstName.' '.$user->lastName; ?>
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
														
													</ul>

												</div>

											</div>
						<?php
										}
									}
								}
							}
						}
						?>
					</div>


				</div>

			</div>

		</div>

	</div>

<?php require ('footer.php'); ?>
