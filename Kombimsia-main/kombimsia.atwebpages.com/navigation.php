<!-- navbar -->

                
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