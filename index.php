<?php
	require("menu.php");
?>

  	<div class="container" id="middle_container">
  		<div class="jumbotron" id="jumbo">
		    <h1>Mizzou Lacrosse <small>The Official Website</small></h1>
		    <p>Welcome to the Mizzou Lacrosse Website</p>
		    <!--<div class="col-lg-12" id="tutorial">-->
		    	<br><br>
		    	<a class="btn btn-primary btn-lg" role="button" id="index_page_button" onclick="getInfo()">Learn more</a><!--</p>-->
		    <!--</div>-->
		    <div id="ajax">

		    </div>
		</div>

		<br><br>
		<div class="row">
			<div class="col-lg-8">
				<img id="tiger_img" src="tiger.jpg">
			</div>
			<div class="col-lg-4">
				<div class="index_div">
	            	<h3 id="one_mizzou"><strong><u>One Mizzou</u></strong></h3>
	            	<br>
		            <p>
		            	Being a part of Mizzou we believe in the One Mizzou Mission.<br><br>One Mizzou is a student led initiative built around a desire to create a more inclusive campus community.<br><br>One Mizzou advocates education, programming and the exchange of dialogue facilitated by our student organizations and campus resources.<br><br>One Mizzou will challenge students, faculty and staff to recognize and incorporate diverse voices and perspectives in every aspect of campus life.
		            </p>
	            </div>
			</div>
		</div>
		<!-- row -->

		<br><br><br><br>
		<div class="row" id="padding">
			<img id="group" src="group_photo.jpg">
		</div>
		<!-- row -->

		<br><br>
		<div class="row">
			<div class="col-lg-8">
				<div class="index_div">
					<h3 id="one_mizzou"><strong><u>Mizzou Athletics</u></strong></h3>
					<br>
					<p>
						The primary goal of the Department of Intercollegiate Athletics at the University of Missouri is to develop the student-athlete as a total person. The goals and objectives contained in the strategic plan are intended to develop Champions for Life in three critical areas: <strong>academic integrity, social responsibility, and competitive athletic excellence.</strong> The University of Missouri athletics program distinguishes itself by valuing the student-athlete as a learner, citizen, and competitor.
					</p>
					<h3 id="one_mizzou"><strong><u>Core Values</u></strong></h3>
					<br>
					<p>
						The individual and collective talents within the University of Missouri Department of Intercollegiate Athletics create our competitive advantage. Core values of <strong>respect for one's self and for others, responsibility, discovery,</strong> and <strong>excellence</strong> shall guide the conduct of all programs in fulfilling our responsibility to the citizens of Missouri. The Department of Athletics shall adhere to all University, Southeastern Conference, and NCAA guidelines and demonstrates highly-principled behavior to all student-athletes and those who support the University.
					</p>
				</div>
			</div>
			<div class="col-lg-4" id="sec_pic">
				<img id="sec" src="mizzou_sec.jpg">
			</div>
		</div>
		<!-- Row -->
		<br><br><br><br>
		<div class="row">
			<div class="col-lg-12">
				<div class="index_div">
					<h3 id="one_mizzou_center"><strong><u>Recruiting</u></strong></h3>
					<br>
					<p>
						Interested in being recruited?  Go to the top of the page to our information tab and click on recruiting!  Then just fill out the information on that page and our Recruiting Chair will get back to you as soon as possible.
					</p>
					<h3 id="one_mizzou_center"><strong><u>Questions/Comments</u></strong></h3>
					<br>
					<p>
						If you have any questions or comments about the team or the website, feel free to go to our contacts page located at the top of the screen under the information tab.  A member of the LT will get back to you as soon as possible with an answer or further information.  Or fill out a form below!
					</p>
				</div>
			</div>
		</div>
		<!-- row -->

		<br><br>
		<div class="row">
	        <div class="col-md-6 col-md-offset-5">
	            <button type="button" class="btn btn-default btn-lg" onclick="contactUs()">
	                <span class="glyphicon glyphicon-download"></span> Contact Us!
	            </button>
	        </div>
	    </div>

	    <br>
	    <div class="row">
	    	<div class="col-lg-6 col-lg-offset-3">
	    		<form name="contact" action="" method="POST" class="hidden" id="contact_button">
	    				<input type="text" class="form-control" name="this_name" placeholder="Name"><br>
	    				<input type="text" class="form-control" name="this_email" placeholder="Email Address"><br>
		    			<input type="text" class="form-control" name="this_comment" placeholder="Question/Comment"><br>
		    			<div class="col-lg-offset-5"><input type="submit" class="btn btn-default btn-lg" id="btn_center" name="submit" value="Submit" onclick="submission();"></div>
	    			</div>
	    		</form>
	    	</div>
	    </div>
	    <!-- row -->

  	</div>
  	<!-- Container -->

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.1/dist/js/bootstrap.min.js"></script>
  </body> <!-- Ends the body of the page -->

</html>