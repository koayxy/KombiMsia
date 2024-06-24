<?php
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}
 
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    echo "<div class='col-md-4' style=' margin-top:20px'>";
    echo "<div class='product-name display-none' style='font-family:georgia;font-size:20px;font-style:italic;'>{$name}</div>"; 
    $product_image->product_id=$id;
    $stmt_product_image=$product_image->readFirst();

    while ($row_product_image = $stmt_product_image->fetch(PDO::FETCH_ASSOC)){
        echo "<div class='m-b-10px'>";
        echo "<img src='images/{$row_product_image['name']}' class='book-img' height=250px width=200px />";
        echo "</div>";
    }

    echo "<div class='product-name' style='margin:10px;font-family:georgia;font-size:16px;font-style:italic;'>{$description}</div>";

    echo "<div class='m-b-10px'>";
        if(array_key_exists($id, $_SESSION['cart'])){
            echo "<a href='cart.php' class='btn btn-success' style='color:white'>";
            echo "Update Cart";
            echo "</a>";
        }else{
            echo "<a href='add_to_cart.php?id={$id}&page={$page}' class='btn btn-primary' style='color:white'>Add to Cart</a>";
        }
    echo "</div>";
 
    echo "</div>";
}
 
include_once "paging.php";
?>