<?php
session_start();
include 'dbconfig.php';
include_once "objects/product.php";
include_once "objects/product_image.php";
 
$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
$product_image = new ProductImage($db);
$action = isset($_GET['action']) ? $_GET['action'] : "";
$page = isset($_GET['page']) ? $_GET['page'] : 1; 
$records_per_page = 6;
$from_record_num = ($records_per_page * $page) - $records_per_page;
$page_title="Recomended Cook Books";
 
include 'shop_header.php';
echo "<div class='col-md-12'>";
    if($action=='added'){
        echo "<div class='alert alert-info' style='margin-top:20px'>";
            echo "Product was added to your cart!";
        echo "</div>";
    }
 
    if($action=='exists'){
        echo "<div class='alert alert-info'>";
            echo "Product already exists in your cart!";
        echo "</div>";
    }
echo "</div>";
$stmt=$product->read($from_record_num, $records_per_page);
$num = $stmt->rowCount();
if($num>0){
    $page_url="products.php?";
    $total_rows=$product->count();
    include_once "read_products_template.php";
}
 
else{
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>No products found.</div>";
    echo "</div>";
}
 
// contents will be here 
 

include 'shop_footer.php';
?>

