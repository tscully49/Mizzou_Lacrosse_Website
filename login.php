<?php
	if (isset($_POST['submit'])) {
		if($_POST['u_name'] == "test" && $_POST['p_word'] == "pass") {
			session_start();
			$_SESSION['login'] = true;
			$_SESSION['name'] = $_POST['u_name'];
			header("Location: https://babbage.cs.missouri.edu/~tps9tb/Lax_Website/members.php");
		}
	}
	require("menu.php");
?>

  	<div class="container" id="middle_container">
  		<div class="jumbotron" id="jumbo">
  			<h1>Login</h1>
  			<p>Login using your Username and Password</p>
		</div>
		<!-- Jumbo -->

		<div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-warning" id="login_table">
                    <div class="panel-heading" id="login_header">
                        <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> <strong>Login</strong></h3>
                    </div>
                    <div class="panel-body">
                    	<div class="row hidden" id="error_message">
							<div class='alert alert-danger' role='alert'>
							    <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
							    Enter a valid email address
							</div>
						</div>
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

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.1/dist/js/bootstrap.min.js"></script>

    <?php
		if(isset($_POST['submit'])) {
			if($_POST['u_name'] != "test" || $_POST['p_word'] != "pass") {
					echo'<script>error();</script>';
			}
		}
	?>
  </body> <!-- Ends the body of the page -->

</html>