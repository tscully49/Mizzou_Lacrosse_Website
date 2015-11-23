<?php
	require("menu.php");
?>

  	<div class="container" id="middle_container">
  		<div class="jumbotron" id="jumbo">
  			<div class="row">
  				<div class="col-lg-12">
  				<h2>Contact Us <small>with any questions or comments</small></h2>
  				</div>
                <div class="col-lg-12">
                    <div class="panel panel-default" id="members_table">
                        <div class="panel-heading" id="members_header">
                            <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> <strong>Contact Form</strong></h3>
                        </div>
                        <div class="panel-body" id="table_members">
                        	<form name="contact" action="" method="POST" id="contact">
			    				<input type="text" class="form-control" name="this_name" placeholder="Name"><br>
			    				<input type="text" class="form-control" name="this_email" placeholder="Email Address"><br>
				    			<input type="text" class="form-control" name="this_comment" placeholder="Question/Comment"><br>
				    			<p id="one_mizzou">Would you like information about recruiting?</p>
				    			<input type="radio" name="recruit" value="yes" checked>Yes
				    			<br>
				    			<input type="radio" name="recruit" value="no">No
				    			<p id="one_mizzou">Would you like a member of the LT to contact you?</p>
								<input type="radio" name="contact_back" value="yes" checked>Yes
				    			<br>
				    			<input type="radio" name="contact_back" value="no">No
				    			<div class="col-lg-offset-5"><input type="submit" class="btn btn-default btn-lg" id="btn_center" name="submit" value="Submit" onclick="submission();"></div>
			    				</div>
				    		</form>
			            </div>
			            <!-- panel body -->
			        </div>
			        <!-- panel -->
			    </div>
			    <!-- col -->
			</div>
			<!-- row -->
		</div>
		<!-- Jumbo -->
  	</div>
  	<!-- container -->

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.1/dist/js/bootstrap.min.js"></script>
  </body> <!-- Ends the body of the page -->

</html>