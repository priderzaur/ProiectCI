<?php require('header.php'); ?>

	<div class="container margin-top-fix">

		<div class="row">

			<div class="col-md-offset-1 col-md-10">

				<div class="row">

					<div class="col-md-2">

						<ul class="list-unstyled">
							<li><a href="<?php echo site_url().'/messages'; ?>">Go back</a></li>
						</ul>

					</div>

					<div class="col-md-10 timeline border-radius-all">

						<div class="row messages">

							<div class="col-md-12">

									<?php if (empty($conversations)): ?>


										<div class="row">
												<div class="col-md-2">
													<img src="<?php echo $user['avatar']; ?>" class="image-responsive image-post">
												</div>

												<div class="col-md-10 text-left">

													<h4>
														<?php echo $user['firstName'].' '.$user['lastName']; ?>
														<small>Conversation starts now!</small>
													</h4>
													<h4 class="text-muted"> Don't be shy! Say something to your friend! </h4>

												</div>
											</div>

									<?php endif; ?>
									
									<?php foreach($conversations as $reply): ?>

										<?php if($reply->user1 == $user['id']): ?>

											<div class="row">
												<div class="col-md-2">
													<img src="<?php echo $user['avatar']; ?>" class="image-responsive image-post">
												</div>

												<div class="col-md-10 text-left">

													<h4>
														<?php echo $user['firstName'].' '.$user['lastName']; ?>
														<small><?php echo $reply->date; ?></small>
													</h4>
													<?php echo $reply->reply; ?>

												</div>
											</div>

										<?php else: ?>

											<div class="row">
												<div class="col-md-10 text-right">

													<h4>
														<?php echo $chat[0]->firstName.' '.$chat[0]->lastName; ?>
														<small><?php echo $reply->date; ?></small>
													</h4>
													<?php echo $reply->reply; ?>

												</div>

												<div class="col-md-2">
													<img src="<?php echo $chat[0]->avatar; ?>" class="image-responsive image-post">
												</div>
											</div>

										<?php endif; ?>

									<?php endforeach; ?>


								<div class="response">
									
									<form method="POST" action="<?php echo site_url().'/messages/add/'.$chat[0]->user_id; ?>" enctype="multipart/form-data">
										<textarea name="reply" class="text-form" placeholder="Say something" rows=5></textarea>
										<button type="submit" class="btn btn-primary pull-right btn-r">Enter</button>
									</form>

								</div>

							</div>

						</div>
						
					</div>

				</div>

			</div>

		</div>

	</div>
<?php require('footer.php'); ?>