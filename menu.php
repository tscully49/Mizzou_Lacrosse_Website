<?php
	if ($_SERVER['HTTPS'] !== 'on') {
		$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header("Location: $redirectURL");
		exit;
	}
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mizzou Lacrosse</title>

    <link href="bootstrap-3.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Lax_website.css">

    <script>
    	function getInfo() {
    		$.get("https://babbage.cs.missouri.edu/~tps9tb/Lax_Website/info.php", function(data) {
    			$('#ajax').append(data);
    			$('#index_page_button').addClass('hidden');
    		});
    	}
    	function contactUs() {
    		if($('#contact_button').hasClass('hidden') == 1) {
    			$('#contact_button').removeClass('hidden');
    		}
    		else {
    			$('#contact_button').addClass('hidden');
    		}
    	}
    	function submission() {
    		alert("Thank you for your submission!  A member of our LT or coaching staff will get back to you as soon as possible.  For recruiting questions, please contact coach Magic as 123-456-7890");
    	}
    	function error() {
			$('#error_message').removeClass('row hidden');
			$('#error_message').addClass('row');
		}
  	</script>

  </head> <!-- Exits the Header of the page -->

  <body>
  	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  		<div class="container">
	  		<div class="navbar-header">
	  			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="index.php">Mizzou Lacrosse</a>
	  		</div>
	  		<div class="collapse navbar-collapse">
		        <ul class="nav navbar-nav">
		        	<li class="active"><a href="members.php">Players</a></li>
		        	<li><a href="https://www.facebook.com/groups/163374747190225/?ref=br_tf">Facebook</a></li>
		        	<li><a href="http://mcla.us/team/missouri/2014/schedule.html">Schedule</a></li>
		        	<li class="dropdown">
		        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Information <span class="caret"></span></a>
		        		<ul class="dropdown-menu" role="menu">
		        			<li><a href="coach.php">Coach</a></li>
		        			<li><a href="photos.php">Photos</a></li>
		        			<li><a href="http://mcla.us/team/missouri/2014/roster.html">Roster</a></li>
		        			<li class="divider"></li>
		        			<li><a href="record.php">Record</a></li>
		        		</ul>
		    		</li>
		    		<li><a href="contact.php">Contact us</a></li>
		    	</ul>
		  		<ul class="nav navbar-nav navbar-right">
			        <?php
			        	if(!isset($_SESSION['login'])) {
			        		session_start();
			        		echo"<li><a href='login.php'>Login</a></li>";
			        	}
			        	else {
			        		echo"<li><a href='logout.php'>Logout</a></li>";
			        	}
			        ?>
			    </ul>
		    </div>
	  	</div>
  	</div>

  	<img id="background" src="people.jpg">