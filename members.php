<?php
	session_start(); // Begins the session and retores all variables if there are any currently in the session variable 
	if(!isset($_SESSION['login'])) {
		header('Location: https://babbage.cs.missouri.edu/~tps9tb/Lax_Website/error.php');
	}
	require("menu.php");
?>

	<!--<div id="background"> -->
	  	<div class="container" id="middle_container">
	  		<div class="jumbotron" id="jumbo">
	  			<div class="row">
	  				<div class="col-lg-12">
	  				<h2>Mizzou Lacrosse Members Database</h2>
	  				<p>Hello <u><?php echo $_SESSION['name']; ?></u></p>
	  				</div>
                    <div class="col-lg-12">
                        <div class="panel panel-default" id="members_table">
                            <div class="panel-heading" id="members_header">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> <strong>All Players</strong></h3>
                            </div>
                            <div class="panel-body" id="table_members">
						    <?PHP
						    	$servername = "dbhost-mysql.cs.missouri.edu";
								$username = "tps9tb";
								$password = "5MNMfwU2";

								// Create connection
								$conn = mysql_connect($servername, $username, $password) or die ("Error " . mysql_error());

								// Check connection
								if (!$conn) {
								    die("Connection failed: " . mysql_error());
								}
								else {
									//echo "<h3>Connected successfully</h3>";
								}
								mysql_select_db(tps9tb);
								$results = mysql_query('SELECT name AS "Name", player_num AS "Number", position AS "Position", year AS "Year", height AS "Height", weight AS "Weight" FROM players;') or die ("Error " . mysql_error());

								mysql_close($conn);
						    ?>
							    <div class="table-responsive">
				                    <table class="table table-bordered table-hover table-striped" id="members_table">
				                        <thead>
				                            <tr>
				                                <?PHP
				                                    $num_fields = mysql_num_fields($results);
				                                    for ($i=0;$i<$num_fields;$i++) { // Prints out all headers for the fields 
				                                        $fieldName = mysql_field_name($results, $i);
				                                        echo "\t\t\n<th>$fieldName</th>"; 
				                                    }
				                                ?>
				                            </tr>
				                        </thead>
				                        <tbody>
				                        <?PHP
				                            while ($players = mysql_fetch_array($results, MYSQL_ASSOC)) {
				                                echo"<tr>";
				                                foreach($players as $col) { // Prints out all the info 
				                                    echo"\n\t\t<td>$col</td>";
				                                }
				                                echo"\n\t</tr>";
				                            }
				                        ?>
				                        </tbody>
				                    </table>
				                </div>
				                <!-- table -->
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
	<!--</div>-->
	<!-- background -->

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.1/dist/js/bootstrap.min.js"></script>
  </body> <!-- Ends the body of the page -->

</html>