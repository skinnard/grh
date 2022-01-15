<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Mind Your Manners | Dog Walking</title>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/contact_style.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
	<script src="picturefill.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
</head>

<body>
	
	<div class="wrapper">


		<div class="container clearfix"> <!-- Content Container -->

			<a href="index.php" id="logo" class="svg" title="Home">
				<object data="img/logo.svg" type="image/svg+xml" class="mym_logo">	
				</object>
			</a>
         
			<!-- Navigation! -->

			<ul id="nav">
				<li class="list our_team non-button"><a href="our_team.php">Our Team</a></li>
				<li class="list services non-button"><a href="services.php">Services</a>
					<ul>
						<li><a href="group_walks.php">Group Walks</a></li>
						<li><a href="puppy_visits.php">Puppy Visits</a></li>
						<li><a href="boarding.php">Boarding</a></li>
					</ul>
				</li>
				<li class="list about non-button"><a href="about.php">Why Us?</a></li>
				<a href="https://www.facebook.com/pages/Mind-Your-Manners-Dog-Walking/200158867525?sk=photos_stream" target="blank" title="Visit Us on Facebook!"><li class="list facebook non-button"></li></a>
			</ul> <!-- End of Navigation! -->

			<div id="contact_div">
				<a href="contact.php" class="contact btn-contact">Contact</a>
			</div>

			<a href="index.php" title="Mind Your Manners Home"><div id="header-img" data-picture data-alt="Mind You Manners Header">
				<div data-src="img/header-img.jpg"></div>
				<div data-src="img/header-img-small.png" data-media="(max-width: 650px)"></div>
				<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
				<noscript>
					<img src="img/header-img.png" alt="Mind Your Manners Header">
				</noscript>
			</div></a>

			<!-- End OF Header -->
				
				<div id="contact-area">
					
					<form method="post" action="contactengine.php">
						<input type="text" name="Name" id="Name" placeholder="name"/>
						<input type="text" name="Email" id="Email" placeholder="email"/>
						<input type="text" name="Tel" id="Tel" placeholder="telephone"/>
						<textarea name="Message" rows="20" cols="20" id="Message" placeholder="message"></textarea>
						<input type="submit" name="submit" value="Submit" class="submit-button" />
					</form>
					
					<div style="clear: both;"></div>

				</div>

				    <div id="hidden_txt">
						<h1>Call us:<br><a href="tel:+14163192001"> 1-416-319-2001 </a><br/>
						Email us:<br><a href="mailto:mindyourmannersinfo@gmail.com">mindyourmannersinfo@gmail.com</a></h1>
					</div> <!-- END OF CONTACT FORM-->
			 
			<div class="grid_12 omega" id="bottom_info"> 
				<h2>Get Walkin’ with Us!</h2>
				
				<div id="contact">
					<p>Call us:<a href="tel:+14163192001"> 1-416-319-2001 </a><br/>
					Email us: <a href="mailto:mindyourmannersinfo@gmail.com">mindyourmannersinfo@gmail.com</a></p>
				</div>
				
				<p>Feel free to contact us any time for a quote or just to chat!</p>		
				
			</div>
			
		</div> <!-- END OF CONTAINER -->	

		<div id="copyright" class="grid_12">  <!-- Footer --> 
			<p>© 2014 Mind Your Manners Dog Walking Company. All Rights Reserved.</p>
		</div>

	</div> <!-- END OF WRAPPER -->	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="external/matchmedia.js"></script>
	<script src="js/picturefill.js"></script>

</body>
</html>