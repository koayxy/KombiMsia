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
	<link rel="stylesheet" href="css/indian.css">
	
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
						<a href="index.php">
							<img src="images/klcc.jpg" width="80px" height="80px" alt="klcc">
						</a>
					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li><a href="index.php">HOME</a></li>
								<li><a href="catalog.php">CATALOG</a></li>
					            <li><a href="#">CUISINE</a>
					            	<ul>
					            		<li><a href="malay.php">MALAY</a></li>
					            		<li><a href="chinese.php">CHINESE</a></li>
					            		<li class="active"><a href="indian.php">INDIAN</a></li>
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

	<div class="first-widget parallax" id="portfolioId">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Indian Cuisine</h2>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<ul id="filters" class="mixitup-controls">
					<li class="filter"><a href="#food">Food</a></li>
					<li class="filter"><a href="#drinks">Drinks</a></li>
					<li class="filter"><a href="#dessert">Deserts</a></li>
				</ul>
			</div> <!-- /.col-md-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->	

	<div class="container">
		<div class="row">
			<div class="portfolio-holder" id="Grid">

				<div class="col text-center justify-content-center align-self-center">
					<div id="food">
						<h3>ROTI CANAI</h3>
						<img src="https://cdn.kuali.com/wp-content/uploads/2015/05/Roti-canai.jpg" alt="nasi lemak" class="indian">
						<p><i>Roti canai</i> is a flatbread served with <i>dal</i>, curry and somtimes condensed milk. There are different variations that include banana (<i>roti pisang</i>), egg (<i>roti telur</i>), milo powder (<i>roti milo</i>) and a tall flaky tower (<i>roti tisu</i>). It is often eaten as breakfast and one of the most economical dish at RM1.50 ($0.37 USD). Click <a href="https://www.food.com/recipe/roti-canai-authentic-malaysian-recipe-270723">here </a>for recipe</p>

						<h3>NAAN</h3>
						<img src="https://murnidiscovery.com/site/wp-content/uploads/2017/03/Naan-Garlic.jpeg" alt="naan" class="indian">
						<p><i>Naan</i> is basically a leavened, fancier version of <i>roti canai</i> that has a filling inside. It was traditionally made by baking on the side of a dome shaped clay oven, and the weight of <i>naan</i> would result in a teardrop shape. The variations include cheese <i>naan</i>, garlic <i>naan</i>, butter <i>naan</i> etc. Click <a href="https://www.cookwithmanali.com/restaurant-style-garlic-naan/">here </a>for recipe</p>

						<h3>MEE GORENG</h3>
						<img src="https://recipeguru.org/wp-content/uploads/2020/04/mee-goreng-mamak-recipe.jpg" alt="mee goreng" class="indian">
						<p>This Indian-style <i>mee goreng</i> is a popular fried noodle dish that is spicy, savory, sweet and tangy. The difference between this fried noodle in comparison to Indonesian fried noodle is a added hint of curry powder in our <i>mee goreng</i>. Click <a href="https://rasamalaysia.com/recipe-indian-mee-goreng/">here </a>for recipe</p>

						<h3>NASI BIRYANI</h3>
						<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Hyderabadi_Chicken_Biryani.jpg/1200px-Hyderabadi_Chicken_Biryani.jpg" alt="nasi_biryani" class="indian">
						<p>A mixed rice dish made with a wholesome lot of Indian spices in particular. It is made from basmati rice, cooked with spices and then served with yogurt, meat (chicken, beef, lamb, pork) and vegetables. Click <a href="https://recipesaresimple.com/recipe/nasi-briyani/">here </a>for recipe</p>

						<h3>TANDOORI CHICKEN</h3>
						<img src="https://res.cloudinary.com/mealthy1/image/upload/ar_16:11,c_fill,f_auto,h_600,q_auto:best,w_800/v1567710256/cms_recipe_featured_image/wbqpuatbgctugjdzjmee.jpg" alt="tandoori" class="indian">
						<p>Grilled chicken with a strong red hue from being marinated in garam masala, ceyenne pepper and other chili spicies. It has a sour hint from yogurt and lemon/lime juice. Commonly served to eat with naan. Click <a href="https://www.indianhealthyrecipes.com/tandoori-chicken-recipe/">here </a>for recipe</p>
					</div>
					
					<div id="drinks">
						<h3>MASALA CHAI</h3>
						<img src="https://www.archanaskitchen.com/images/archanaskitchen/0-Archanas-Kitchen-Recipes/2016/1-Archana/Masala_Chai_Recipe_-_Indian_Spiced_Tea-1.jpg" alt="chai" class="indian">
						<p>Spiced tea is the direct translation of <i>masala chai</i>. A black tea infused with spices in milk and sugar. There is a second method using masala chai powder. Click <a href="https://www.indianhealthyrecipes.com/masala-tea-chai/">here </a>for recipe</p>
				    </div>

				    <div id="dessert">
						<h3>JELEBI</h3>
						<img src="https://upload.wikimedia.org/wikipedia/commons/1/1c/Awadhi_jalebi.jpg" alt="jelebi" class="indian">
						<p><i>Jelebi</i> is a spiral snack made from deep-frying flour batter, then soaked in sugar syrup. It is a sweet <i>muruku</i> fermented for hours to obtain the unique fermented taste. Click <a href="https://www.indianhealthyrecipes.com/jalebi-recipe/">here </a>for recipe</p>
					</div>

				</div> <!-- /.col-md-4 -->
				
			</div> <!-- /.portfolio-holder -->
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