<head>
	<meta charset="UTF-8">
	<title>Social Share</title>
	
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/custom.css">
	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/elastic/dependencies/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url(); ?>assets/elastic/jquery.elastic.source.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url(); ?>assets/jquery/search.js" type="text/javascript" charset="utf-8"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


</head>

<header>
	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="row">

					<div class="col-md-2">

						<a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>assets/logo.png" class="image-responsive logo"></a>

					</div>

					<div class="col-md-7">

						<form class="form_search">
							<input type="text" class="search" id="searchid" placeholder="Search for people ">
						</form>

						<div id="result">

							<?php 
								//print_r(incarca_useri());

									//echo 'postid' . $_POST['search'];

								//$postData=$this->input->post('search');

								//var_dump($postData); exit;


								echo $_POST['search'];
								    if(isset($_POST['search']))

										{
									
									//$q=$_POST['search'];
									$q='ra';

									$link = mysqli_connect("localhost", "root", "", "codeigniter2");
								    $q = mysqli_real_escape_string($link, $q);
								    $strSQL_Result = mysqli_query($link, "select user_id,firstName,lastName,email,avatar from user where firstName like '%$q%' or lastName like '%$q%' or email like '%$q%' order by user_id LIMIT 5");
								    //print_r($strSQL_Result);
								    while($row=mysqli_fetch_array($strSQL_Result))
								    {
								        $fn   = $row['firstName'];
								        $ln = $row['lastName'];
								        $email      = $row['email'];
								        $b_fn = '<strong>'.$q.'</strong>';
								        $b_ln = '<strong>'.$q.'</strong>';
								        $b_email    = '<strong>'.$q.'</strong>';
								        $final_fn = str_ireplace($q, $b_fn, $fn);
								        $final_ln = str_ireplace($q, $b_ln, $ln);
								        $final_email = str_ireplace($q, $b_email, $email);
								        $avatar = $row['avatar'];
								        ?>
								            <div class="show" align="left">
								                <img src="<?php echo $avatar ?>" /><span class="name">
								                <?php echo $final_fn . " " . $final_ln ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
								            </div>
								        <?php
								    }
								}
											
								?>

					</div>

					<div class="col-md-3 top-menu pull-right">

						<ul class="list-unstyled list-inline">
								
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li><a href="<?php echo base_url().'index.php/settings'?>">Settings</a></li>
							<li><a href="<?php echo base_url().'index.php/logout'?>">Logout</a></li>

						</ul>

					</div>

			</div>

		</div>
	</div>

</header>