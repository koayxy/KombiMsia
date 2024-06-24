<!DOCTYPE html>
<html lang="en-US"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>KOMBI MSIA Catalog</title>
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
	<link rel="stylesheet" href="https://bootswatch.com/3/united/bootstrap.min.css">
	<link rel="stylesheet" href="css/catalog.css">
	
	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/catalog.js"></script>

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
						<a href="index.php">
							<img src="images/klcc.jpg" width="80px" height="80px" alt="klcc">
						</a>
					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li><a href="index.php">HOME</a></li>
					            <li class="active"><a href="catalog.php">CATALOG</a></li>
					            <li><a href="#">CUISINE</a>
					            	<ul>
					            		<li><a href="malay.php">MALAY</a></li>
					            		<li><a href="chinese.php">CHINESE</a></li>
					            		<li><a href="indian.php">INDIAN</a></li>
					            	</ul>
					            </li>
					            <li><a href="about.php">ABOUT US</a></li>
					            <li><a href="shop.php">SHOP</a></li>
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
						<h2 class="page-title">Malaysian Cuisine</h2>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">	
		<div class="row">

			<div class="col-md-8 blog-posts">
				<div class="row">
					<div class="col-md-12">
						<div class="food">
							<img src="images/nasi-lemak.jpg" alt="nasilemak">
							<button class="btn"><a href="malay.php">MALAY</a></button>
						</div>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="food">
							<img src="images/currymee-cina.jpg" alt="currymee">
							<button class="btn"><a href="chinese.php">CHINESE</a></button>
						</div>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="food">
							<img src="images/indian-restaurants-in-malaysia.jpg" alt="currymee">
							<button class="btn"><a href="indian.php">INDIAN</a></button>
						</div>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-widget">
						<h4 class="widget-title">MORE INFO ABOUT MALAYSIAN FOOD</h4>
						<div class="popup" id="popup-1">
						  
						  <div class="content">
						    <div class="close-btn" onclick="togglePopup()">&times;</div>
						    <p>Malay food is strong, spicy and aromatic, combining the rich tastes of the many herbs and spices commonly found in Southeast Asia.</p>
						  </div>
						</div>
						<div class="popup" id="popup-2">
						  <div class="overlay"></div>
						  <div class="content">
						    <div class="close-btn" onclick="togglePopup2()">&times;</div>
						    <p>Malaysian Chinese foods are mostly traditional chinese foods, but the flavours are infused with the characteristics of Malay and Indian flavour. For example, Hainanese chicken rice in Malaysia is usually flavoured with tropical pandan leaves and served with chili sauce for dipping, and tastes unlike the typical chicken rice found in Hainan, China.
						    </p>
						  </div>
						</div>

						<div class="popup" id="popup-3">
						  <div class="overlay"></div>
						  <div class="content">
						    <div class="close-btn" onclick="togglePopup3()">&times;</div>
						    <p>Because the vast majority of Malaysia's Indian community are of South Indian descent, and are mostly ethnic Tamils who are descendants of immigrants from a historical region which consists of the modern Indian state of Tamil Nadu and Sri Lanka's Northern Province, much of Malaysian Indian cuisine is predominantly South Indian inspired in character and taste with a tinge of Chinese and Malay flavours.
						    </p>
						  </div>
						</div>
						
						<img src="images/malay2.jpg" class="malaysian"> 
						<button onclick="togglePopup()">Malay Cuisine</button>
						<img src="images/malay.jpg" class="malaysian">
						<br>
						<br>
						<img src="images/chinese2.jpg" class="malaysian">
						<button onclick="togglePopup2()">Chinese Cuisine</button>
						<img src="images/chinese.jpg" class="malaysian">
						<br>
						<br>
						<img src="images/indian2.jpg" class="malaysian">
						<button onclick="togglePopup3()">Indian Cuisine</button>
						<img src="images/indian.jpg" class="malaysian">
					</div>
				</div>
			</div>

		</div> <!-- /.row -->
	</div> <!-- /.container -->	
	
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="footer-nav clearfix">
						<ul class="footer-menu">
							<li><a href="index.php">home</a></li>
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
	<script src="js/min/medigo-custom.min.js"></script>

</body>
</html>