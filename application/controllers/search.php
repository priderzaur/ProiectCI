<?php

	Class Search extends CI_Controller{
		
		 public function index() {
		 	$this->load->model('User');
	        $search_data = $this->input->post('search_data');
	        $query = $this->User->get_autocomplete($search_data); ?>

	        <div class="show">
	        	<ul class="list-unstyled">
			        <?php 
			        foreach ($query->result() as $row): ?>

			        	<a href="<?php echo site_url().'/profile/'.$row->user_id; ?>">
				        	<li>
				            	<div class="row">

				            		<div class="avatar-search">
				            			<img src="<?php echo base_url().'uploads/'.$row->avatar; ?>" class="image-post"/>
				            		</div>

				            		
				       	 			<div class="col-md-10">			       	 				
			       	 					<?php echo $row->firstName . " " . $row->lastName; ?>
				       	 			</div>
				       	 			
				       	 		</div>
				       	 	</li>
			       	 	</a>

			       	<?php
			        endforeach;
			        ?>
	        	</ul>
	        </div>
	        <?php
	    }

	}

?>