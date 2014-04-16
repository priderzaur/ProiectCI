<?php require('header.php'); ?>

<?php

	foreach ($posts as $post) { ?>
		<h3><a href="<?php echo base_url('post/id/'.$post['id']); ?>"><?php echo $post['title']; ?></a></h3>
	<?php
	}

?>