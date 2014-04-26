<?php require('header.php'); ?>

	<div class="container margin-top-fix">

		<div class="row">

			<div class="col-md-offset-1 col-md-10">

				<div class="row">

			<div class="col-md-4">

				<div class="mini-profile">

						<div class="pull-left">
							<img src="<?php echo $profil['avatar']; ?>" class="mini-feed-avatar ">
						</div>
						<h5>
							<strong><a href="<?php echo site_url().'/profile/'.$profil['id']; ?>">
								<?php echo $profil['firstName'].' '.$profil['lastName']; ?>
							</a></strong>
						</h5>
						<h6><a href="<?php echo site_url().'/about/'.$profil['id']; ?>">Edit profile</a></h6>

					</div>

					<ul class="list-unstyled feed-menu">

						<li>
							<span class="glyphicon glyphicon-bullhorn"></span> <a href="<?php echo site_url(); ?>">News Feed</a>
						</li>
						<li>
							<span class="glyphicon glyphicon-comment"></span> <a href="<?php echo site_url().'/messages'; ?>">Messages</a>
						</li>
						<li>
							<a href="<?php echo site_url().'/profile/avatar'; ?>">Change Avatar</a>
						</li>

					</ul>

				</div>

				<div class="col-md-8 timeline border-radius-all">

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
					foreach ($feeds as $post) { 

						foreach($users as $user) { 

							if ( $user->user_id == $post->postedByUserID) { ?>

								<div class="timeline-post border-radius-all">

									<div class="container">

										<div class="row">

											<div class="col-md-1 timeline-post-header">

												<div class="mini-avatar">
														
													<img src="<?php echo base_url().'uploads/'.$user->avatar; ?>" class="img-responsive img-rounded">

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
						?>
					</div>


				</div>

			</div>

		</div>

	</div>

<?php require ('footer.php'); ?>
