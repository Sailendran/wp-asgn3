<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/php/default-head.php'?>
    <title>GREENERY - Cart</title>
</head>
<body>
    <?php include 'assets/php/header.php'?>

    <div class="centre body">

    <?php
    require 'assets/php/dbhandler.php';

    $sql = "SELECT carts.*, products.* FROM carts AS carts
        LEFT JOIN products products ON carts.product_id = products.product_id && products.product_visible = 1
        WHERE carts.user_idno = ?;";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('i', $_SESSION['id']);
    $results = false;

    if ($stmt) {
        if($stmt->execute()) {
            
            $result = $stmt->get_result();
            $grandTotal = 0;

            while ($data = $result->fetch_assoc()) {?>

            <div class = 'cart-item'>
                <img src = 'assets/product-images/<?=$data["product_image"]?>'>
                <h2> <?=$data['product_name']?> </h2>
                <p> <?=$data['quantity']?> units</p>
                <h3 class = 'centre'> <a class='price'><?=(float)$data['product_price']?></a></h3>
                <p class = 'centre'> For a total of <a class='price'><?= (int)$data['quantity'] * (float)$data['product_price']?></a>
                <?php $grandTotal += (int)$data['quantity'] * (float)$data['product_price'] ?>
            </div>
               
            <?php ;
            };
        }
    }
?>    
            </div>
    </div>
<script src="assets/js/cart.js"></script>
<script>
    fixPrices();
</script>

<?php 
if ($grandTotal != 0) { ?>
    <br><br><br><br><br>
    <h1>Grand total: $<a id = 'gt'><?=number_format($grandTotal, 2)?></a></h1>

    <form action = 'assets/php/payment.php' method = "POST">
        <input type="hidden" name="total" value = '<?=number_format($grandTotal, 2)?>'>
        <input type="submit" value="Proceed to payment" class = 'formbtn' id = 'paybtn'>
    </form>
<?php } else {
    echo "<h1> Add items to your cart first, then return to pay </h1>";
} ?>
</body>
</html>