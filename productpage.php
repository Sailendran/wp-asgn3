<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'assets/php/default-head.php';
    require 'assets/php/dbhandler.php' ?>
    <title>GREENERY - <?=$_GET['id']?></title>
</head>
<body>
    <?php include 'assets/php/header.php'; ?>
    <br><br><br>
    <div class = 'body'>
    
        <?php
            $sql = 'SELECT * FROM products WHERE product_id = ?;';
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param('i', $_GET['id']);

                if ($stmt->execute()) {
                    $result = $stmt->get_result();

                    if ($stmt->affected_rows == 0) {
                        echo "<h1> No such product exists, please return to the store </h1>
                        <br> <p class = 'centre'> <a href = 'store.php'>Click here</a> </p>";
                        exit();
                        
                    } else {
                        $data = $result->fetch_assoc();

                        $name = $data['product_name'];
                        $price = $data['product_price'];
                        $img = $data['product_image'];

                    }
                }
            }
        ?>
        
        <img src="assets/product-images/<?=$img?>" class = 'centre' alt="Product image">
        <h1> <?=$name?> </h1>
        <h3 class = 'centre'> <?=$price?> </h3>

        

    </div>

</body>
</html>