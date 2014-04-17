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

									<h4><a href>Pamfile Robert</a></h4>

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

						<div class="timeline-menu">

							<ul class="list-unstyled list-inline">

								<li><a href><span class="glyphicon glyphicon-calendar"></span> Timeline</a></li>
								<li><a href ="about.html"><span class="glyphicon glyphicon-user"></span> About</a></li>
								<li><a href><span class="glyphicon glyphicon-picture"></span> Photos</a></li>

							</ul>

						</div>

						<div class="profile-share-form border-radius-all">

							<div class="tab-content">

 								<div class="tab-pane active" id="status">
									<form role="form">
										<textarea class="text-form" placeholder="What's on your mind?" rows=5></textarea>
										<button type="submit" class="btn btn-primary">Share</button>
										<button type="submit" class="btn btn-primary">Add photo</button>
									</form>
								</div>

							</div>

						</div>

						<?php 
						foreach ($updates as $post) { ?>

							<div class="timeline-post border-radius-all">

								<div class="container">

									<div class="row">

										<div class="col-md-1 timeline-post-header">

											<div class="mini-avatar">
												
												<img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/t1.0-1/c18.0.48.48/p48x48/1377992_722124137815406_2027553723_s.jpg" class="img-responsive img-rounded">

											</div>

										</div>

										<div class="col-md-6 timeline-post-content">

											<h5><strong><a href>Pamfile Robert</a></strong></h5>

											<h6 class="text-muted">
												<span class="glyphicon glyphicon-calendar"></span>
												<a href="<?php echo base_url('update/id/'.$post['update_id']); ?>"><?php echo $post['dateCreated'] ?></a>
											</h6>

											<p><?php echo $post['postContent']; ?></p>

										</div>

									</div>

								</div>

								<div class="timeline-post-comments">

									<ul class="list-inline">
										<li><a href>Like</a></li>
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
	