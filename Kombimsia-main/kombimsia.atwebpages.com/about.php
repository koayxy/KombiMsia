<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>KOMBI-MSIA</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="templatemo">

	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/misc.css">
	<link rel="stylesheet" href="css/orange-scheme.css">
	<link rel="stylesheet" href="css/about.css">
	
	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>

	<link rel="shortcut icon" href="images/klcc.jpg" type="image/x-icon" />


</head>
<body>
	<div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="index.php">HOME</a></li>
            <li><a href="catalog.php">CATALOG</a></li>
            <li><a href="#">CUISINE</a>
            	<ul>
            		<li><a href="malay.php">MALAY</a></li>
            		<li><a href="chinese.php">CHINESE</a></li>
            		<li><a href="indian.php">INDIAN</a></li>
            	</ul>
            </li>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="shop.php">SHOP</a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="pull-left logo">
						<a href="index.html">
							<img src="images/klcc.jpg" width="80px" height="80px" alt="klcc">
						</a>
					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">
						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li><a href="index.php">HOME</a></li>
					            <li><a href="catalog.php">CATALOG</a></li>
					            <li><a href="#">cuisine</a>
					            	<ul>
					            		<li><a href="malay.php">MALAY</a></li>
					            		<li><a href="chinese.php">CHINESE</a></li>
					            		<li><a href="indian.php">INDIAN</a></li>
					            	</ul>
					            </li>
					            <li class="active"><a href="about.php">ABOUT US</a></li>
					            <li><a href="cart.php">CART</a></li>
							</ul> <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
					    <div class="responsive-navigation visible-sm visible-xs">
					        <a href="#nogo" class="menu-toggle-btn">
					            <i class="fa fa-bars"></i>
					        </a>
					    </div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->

	<div class="first-widget parallax" id="contact">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">About us</h2>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">	
		<div class="row">
	<?php
	if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"])) {
		$servername = "fdb30.awardspace.net";
		$username = "3816249_final";
		$password = "mypassword123";
		$db = "3816249_final";

		$conn = new mysqli($servername, $username, $password, $db);
		$tech_error = false;
		if ($conn->errno) {
			$tech_error = true;
		} else {
			$name = $conn->real_escape_string(trim($_POST["name"]));
			$email = $conn->real_escape_string(trim($_POST["email"]));
			$subject = $conn->real_escape_string(trim($_POST["subject"]));
			$message = $conn->real_escape_string(trim($_POST["message"]));
			$stmt = $conn->prepare("INSERT INTO about (name, email, subject, message) VALUES (?, ?, ?, ?)");
			$stmt->bind_param('ssss', $name, $email, $subject, $message);
			if ($result = $stmt->execute()){
			} else {
				$tech_error = true;
			}
			$conn->close();
		}
		if (!$tech_error) {
			// All good
	?>
			<div class="col-md-8 blog-posts">
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrapper">
							<br><h3>Thank you!</h3>
							<h5>Thank you for contacting us! We will be contacting you shortly.</h5><br><br>
						</div> <!-- /.contact-wrapper -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->
	<?php
		} else {
			// Technical error
	?>
			<div class="col-md-8 blog-posts">
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrapper">
							<br><h3>So sorry!</h3>
							<h5>We are having some technical problems right now. Come back again later.</h5><br><br>
						</div> <!-- /.contact-wrapper -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

	<?php
		}
	} else {  
	?>

			<div class="col-md-8 blog-posts">
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrapper">
							<br><h3>Who we are</h3>
							<h5>Our purpose is to share to the rest of the world a part of our culture, in particular <strong>Malaysian FOOD!</strong></h5><br><br>
							<p>Hey this is Xin Yi. I'm a sophomore in Computer Science. I came from Malaysia to the states last spring, in hopes of graduating in 2023. I wanted to share my country's unique culture where we have mixed races and hence a large variety of foods. This website displays what we think are the top Malaysian food and some recipe links for those that like to cook!
							<br><br><br>
							Hi, I'm Ka Kit. I'm studying at WMU and currently a junior majoring in Computer Science. I hope that this website we created gives a glimpse of Malaysian culture and its' unique food. Malaysia is a food heaven and we're scratching the surface of all the food we have. I hope that you guys do visit Malaysia and try out all the different and unique food we have.
							</p>

						</div> <!-- /.contact-wrapper -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
                    <div class="col-md-12">
                        <div class="contact-form">
                            <h3>Reach us!</h3>
	                        <div class="widget-inner">
	                            <form action="" method="post" id="contact_form" name="contact_form">
	                                <div class="row">
	                                    <div class="col-md-4">
	                                        <p>
	                                            <label for="name">Name:</label>
	                                            <input type="text" name="name" id="name" maxlength="40">
	                                        </p>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <p>
	                                            <label for="email">Email:</label>
	                                            <input type="email" name="email" id="email" maxlength="40">
	                                        </p>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <p>
	                                            <label for="subject">Subject:</label>
	                                            <input type="text" name="subject" id="subject" maxlength="40">
	                                        </p>
	                                    </div>
	                                </div>
	                                <div class="row">
	                                    <div class="col-md-12">
	                                        <p>
	                                            <label for="message">Message:</label>
	                                            <textarea name="message" id="message" maxlength="255"></textarea>
	                                        </p>
	                                    </div>
	                                </div>
	                                <div class="row">
	                                    <div class="col-md-12">
	                                        <button class="mainBtn" id="submitBtn">Send</button>
	                                    </div>
	                                </div>
	                                <div class="row">
	                                	<div class="col-md-12">
	                                		<div id="result"></div>
	                                	</div> <!-- /.col-md-12 -->
	                                </div> <!-- /.row -->
	                            </form>
                          	</div> <!-- /.widget-inner -->
                        </div> <!-- /.contact-form -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-widget">
						<div class="last-post clearfix">
							<div class="col-md-6">
							<div class="content">
								<br><br>
							    <img src="images/girl.jpg" alt="girl icon" class="girl">
								<img src="images/boy.jpg" alt="boy icon" class="boy">
							</div>
							</div>
							<br><br><br><br>
							<p float: right>"If you enjoyed our website and is inching to taste these foods, do visit Malaysia for authentic Malysian food!"</p>
						</div> <!-- /.last-post -->
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">A message from the creators</h5>
						<div class="row categories">
							<div class="creators">
							<p>We welcome your suggestions and comments. Feel free to drop a message on the left. Have a great day!</p>
						    </div>
						</div> <!-- /.row -->
					</div> <!-- /.sidebar-widget -->
				</div> <!-- /.sidebar -->
			</div> <!-- /.col-md-4 -->

	<?php
		}
	?>
		</div> <!-- /.row -->
	</div> <!-- /.container -->	

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="footer-nav clearfix">
						<ul class="footer-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="catalog.php">catalog</a></li>
							<li><a href="malay.php">malay</a></li>
							<li><a href="chinese.php">chinese</a></li>
							<li><a href="indian.php">indian</a></li>
							<li><a href="about.php">about us</a></li>
							<li><a href="shop.php">shop</a></li>
						</ul> <!-- /.footer-menu -->
					</nav> <!-- /.footer-nav -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<p class="copyright-text">Copyright &copy; 2021 Koay & Leng | CS 3500 Final Project</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer> <!-- /.site-footer -->

	<!-- Scripts -->
	<script src="js/min/plugins.min.js"></script>
	<!-- <script src="js/min/medigo-custom.min.js"></script> -->
	<script src="js/medigo-custom.js"></script>
	<script src="js/plugins/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$(function() {
		  $("form[name='contact_form']").validate({
		    rules: {
		      name: "required",
		      subject: "required",
		      email: {
		        required: true,
		        email: true
		      },
		      message: "required"
		    },
		    messages: {
		      name: "Please enter your name",
		      subject: "Please enter what is this about",
		      email: {
		      	required: "Please enter a your email address",
		      	email: "Please enter a valid email address"
		      },
		      message: "Please enter some messages for us!"
		    },
		    submitHandler: function(form) {
		      form.submit();
		    }
		  });
		});
	</script>

</body>
</html>