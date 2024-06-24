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
 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
 
<script>
$(document).ready(function(){
    $('.add-to-cart-form').on('submit', function(){
        var id = $(this).find('.product-id').text();
        var quantity = $(this).find('.cart-quantity').val();
        window.location.href = "add_to_cart.php?id=" + id + "&quantity=" + quantity;
        return false;
    });
    $('.update-quantity-form').on('submit', function(){
 
    var id = $(this).find('.product-id').text();
    var quantity = $(this).find('.cart-quantity').val();
 
    window.location.href = "update_quantity.php?id=" + id + "&quantity=" + quantity;
    return false;
	});
});
</script>
 
</body>
</html>