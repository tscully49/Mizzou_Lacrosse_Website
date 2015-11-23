<?php
	session_start(); // Begins the session and retores all variables if there are any currently in the session variable 
	if(isset($_SESSION['login'])) { // If the session variable "login" is set, then execute 
		header('Location: https://babbage.cs.missouri.edu/~tps9tb/Lax-Website/members.php'); // Redirect the page to the home page if the user is logged in 
		exit;
	}
	require("menu.php");
?>

	<!--<div id="background"> -->
	  	<div class="container" id="middle_container">
	  		<div class="jumbotron" id="jumbo">
	  			<p>Must be logged in to see this page...</p>
			</div>
			<!-- Jumbo -->

			<div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="panel panel-danger" id="login_table">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> <strong>Log in</strong></h3>
                            </div>
                            <div class="panel-body">
                            	<form name="contact" action="login.php" method="POST" id="contact_button">
				    				<input type="text" class="form-control" name="u_name" placeholder="Username"><br>
				    				<input type="password" class="form-control" name="p_word" placeholder="Password"><br>
					    			<input type="submit" class="btn btn-default btn-md" id="btn_center" name="submit" value="Submit"></div>
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
	  	<!-- container -->
	<!--</div>-->
	<!-- background -->

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.1/dist/js/bootstrap.min.js"></script>
  </body> <!-- Ends the body of the page -->

</html>