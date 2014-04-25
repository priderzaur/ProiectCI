
	<footer>

		<div class="container">
			<div class="col-md-offset-1 col-md-10">
				<h6 class="text-muted">Social Share &copy; 2014</h6>
			</div>
		</div>

	</footer>

	<script type="text/javascript">
		// <![CDATA[
		jQuery.noConflict();
		jQuery(document).ready(function(){			
			jQuery('textarea').elastic();
			jQuery('textarea').trigger('update');
		});	
		// ]]>
	</script>

	<script type="text/javascript" >
		function tabs(selectedtab) {    
		    // contents
		    var s_tab_content = "tab_content_" + selectedtab;   
		    var contents = document.getElementsByTagName("div");
		    for(var x=0; x<contents.length; x++) {
		        name = contents[x].getAttribute("name");
		        if (name == 'tab_content') {
		            if (contents[x].id == s_tab_content) {
		            contents[x].style.display = "block";                        
		            } else {
		            contents[x].style.display = "none";
		            }
		        }
		    }   
		    // tabs
		    var s_tab = "tab_" + selectedtab;       
		    var tabs = document.getElementsByTagName("a");
		    for(var x=0; x<tabs.length; x++) {
		        name = tabs[x].getAttribute("name");
		        if (name == 'tab') {
		            if (tabs[x].id == s_tab) {
		            tabs[x].className = "active";                       
		            } else {
		            tabs[x].className = "";
		            }
		        }
		    }     
		}
	</script>