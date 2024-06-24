<?php
$_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>KOMBI MSIA SHOP</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/misc.css">
    <link rel="stylesheet" href="css/orange-scheme.css">
    <link rel="stylesheet" href="https://bootswatch.com/3/united/bootstrap.min.css">
    <link rel="stylesheet" href="css/shop.css">
    
    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

    <link rel="shortcut icon" href="images/klcc.jpg" type="image/x-icon" />

</head>
<body>

    <!-- highlight if $page_title has 'Products' word. -->
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
        <li><a href="cart.php">CART</a></li>
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
                </div>  <!-- /.logo -->

                <div class="main-navigation pull-right">

                    <nav class="main-nav visible-md visible-lg">
                        <ul class="sf-menu">
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
                            <li class="active"><a href="shop.php">SHOP</a></li>
                            <li <?php echo $page_title=="Cart" ? "class='active'" : ""; ?> >
                                <a href="cart.php">
                                    <?php
                                    // count products in cart
                                    $cart_count=count($_SESSION['cart']);
                                    ?>
                                    Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                                </a>
                            </li>
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
                        <h1><?php echo isset($page_title) ? $page_title : "Kombimsia"; ?></h1>
                    </div>
                </div> 
            </div>
        </div>
    </div>