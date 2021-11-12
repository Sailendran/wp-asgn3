<?php

require 'dbhandler.php';

$sql = "SELECT product_name, product_image, product_id, product_visible, product_price FROM products;";
$result = $conn->query($sql);
$returns = false;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc() ) {
        if ($row['product_visible'] == 1) {
            echo "<div class = 'store-item'> <a href = ../../productpage.php?id=".$row['product_id'].">
                <img src = 'assets/product-images/".$row['product_image']."'>
                <h2> ".$row['product_name']." </h2>
                <h3>" . $row['product_price'] . "</h3>
            </a> </div>
            ";
            $returns = true;
        };
    };

    if (!$returns) {
        echo "<h1 class = 'centrescreen'> Nothing to see here, but come back soon when items become visible </h1>";
    }
} else {
    echo "<h1 class = 'centrescreen'> Oops, no items to sell here... </h1>";
};
