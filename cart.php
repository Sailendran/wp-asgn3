<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/php/default-head.php'?>
    <title>GREENERY - Cart</title>
</head>
<body>
    <?php include 'assets/php/header.php'?>

    <div class="body">

    <?php
    require 'assets/php/dbhandler.php';

    $sql = "SELECT * FROM carts WHERE user_idno = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('i', $_SESSION['id']);
    $results = false;

    if ($stmt) {
        if($stmt->execute()) {
            
            $result = $stmt->store_result(); //cannot get result because of buffer, must store. Loop through

            if ($stmt->affected_rows == 0) {

                echo "<h1 class = 'centre'>No items in your cart yet...</h1>";

            } else {

                while ($data = $result->fetch_assoc()) {
                    $sql = "SELECT product_name, product_price, product_image FROM products where product_id = ?;";
                    $stmt = $conn->prepare($sql);

                    $stmt->bind_param('i', $data['product_id']);
                    $result = $stmt->get_result();

                    echo $stmt->error;
                    $product_info = $result->fetch_assoc();
                    
                    ?>
                    
                    <div class = 'store-item'>
                        <img src = 'assets/product-images/<?=$product_info['product_image']?>'>
                        <h2> <?=$data['quantity']?> x <?=$product_info['product_name']?> </h2>
                        <h3> $<?=$product_info['product_price']?></h3>
                        <p> For a total of <?php echo ((float)$product_info['product_price'] * (int)$data['quantity']);
                        
                }?>

                </div>

            <?php
            }
        }
    }
    
?>

    </div>

</body>
</html>