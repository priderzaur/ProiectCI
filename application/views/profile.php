<?php require('header.php'); ?>

	<div class="container">

		<div class="row">

			<div class="col-md-offset-1 col-md-10">

				<div class="timeline-header">

					<div class="media">

						<div class="pull-left avatar">
							<img src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-prn2/t1.0-9/1377992_722124137815406_2027553723_n.jpg"class="img-circle img-responsive"></img>
						</div>

						<div class="media-body">

							<h4><a href>Pamfile Robert</a></h4>

							<h6>
								<ul class="list-unstyled text-muted">
									<li>IT Department at ASII</li>
									<li>Faculty of Computer Science, Alexandru Ioan Cuza University</li>
								</ul>
							</h6>

							<button type="button" class="btn btn-primary">
								<span class="glyphicon glyphicon-plus"></span> Follow
							</button>

						</div>

					</div>

				</div>

				<div class="clearfix"></div>

				<div class="timeline-menu  border-radius-down">

					<ul class="list-unstyled list-inline">

						<li class="active"><a href><span class="glyphicon glyphicon-calendar"></span> Timeline</a></li>
						<li><a href ="about.html"><span class="glyphicon glyphicon-user"></span> About</a></li>
						<li><a href><span class="glyphicon glyphicon-picture"></span> Photos</a></li>

					</ul>

				</div>

				<div class="row">

					<div class="col-md-9">

						<div class="profile-share-form border-radius-all">

							<div class="tab-content">

 								<div class="tab-pane active" id="status">
									<form role="form">
										<textarea class="text-form" placeholder="What's on your mind?"></textarea>
										<button type="submit" class="btn btn-primary">Share</button>
										<button type="submit" class="btn btn-primary">Add photo</button>
									</form>
								</div>

							</div>

						</div>

						<?php 
						foreach ($updates as $post) { ?>

							<div class="timeline-post border-radius-all">

								<div class="timeline-post-header">

									<div class="pull-left mini-avatar">
										
										<img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn2/t1.0-1/c18.0.48.48/p48x48/1377992_722124137815406_2027553723_s.jpg" class="img-responsive img-rounded">

									</div>

									<h5><strong><a href>Pamfile Robert</a></strong></h5>
									<h6 class="text-muted">
										<span class="glyphicon glyphicon-calendar"></span>
										<a href="<?php echo base_url('update/id/'.$post['update_id']); ?>"><?php echo $post['dateCreated'] ?></a>
									</h6>
								</div>

								<div class="timeline-post-content">
									<p><?php echo $post['postContent']; ?></p>
								</div>



								<div class="timeline-post-comments">
		
									<div class="clearfix"></div>

									<form role="form">
										<textarea class="form-control" rows=1  placeholder="Write a comment..."></textarea>
									</form>

								</div>

							</div>

						<?php
						}
						?>
					</div>

					<div class="col-md-3 pull-right">

						<div class="profile-stats border-radius-all">

							<h4>Stats</h4>

							<ul class="list-unstyled list-inline text-center">

								<li><h5 class="text-center"><strong>14324</strong><br>Followers</h5></li>
								<li><h5 class="text-center"><strong>3242</strong><br>Following</h5></li>

							<ul>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

<?php require ('footer.php'); ?>
	