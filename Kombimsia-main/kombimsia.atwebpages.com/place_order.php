<?php
session_start();
session_destroy();
$page_title="Thank You!";
 
include_once 'shop_header.php';
 
echo "<div class='col-md-12'>";
echo "<div class='alert alert-success'>";
echo "<strong>Your order has been placed!</strong> Thank you very much!";
echo "</div>";
 
echo "</div>";
 
include_once 'shop_footer.php';
?>