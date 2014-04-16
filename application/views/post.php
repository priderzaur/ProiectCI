<?php require('header.php'); ?>

<h3><?php echo $title; ?></h3>
<strong><?php echo date('l jS \of F Y h:i:s A',strtotime($date)); ?> | <?php echo $email; ?></strong>

<div>
	<?php echo $content; ?>
</div>