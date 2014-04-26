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


	<script type="text/javascript">
        function ajaxSearch() {
            var input_data = $('#search_data').val();
            if (input_data.length === 0) {
                $('#suggestions').hide();
            } else {

                var post_data = {
                    'search_data': input_data,
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                };

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url(); ?>/search",
                    data: post_data,
                    success: function(data) {
                        // return success
                        if (data.length > 0) {
                            $('#suggestions').show();
                            $('#autoSuggestionsList').addClass('auto_list');
                            $('#autoSuggestionsList').html(data);
                        }
                    }
                });

            }
        }
	</script>


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
							<input name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();" class="search form-control" placeholder="Search for people ">
						</form>

						 <div id="suggestions" class="result">
				            <div id="autoSuggestionsList">  
				            </div>
				        </div>
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