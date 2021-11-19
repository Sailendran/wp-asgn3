<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/admin-pages-head.php';?>
    <title>GREENERY - Edit product</title>
</head>
<body>

    <?php include 'assets/header.php';?>

    <div class = 'body'>

        <?php 
        if ($_SESSION['id'] != 2) {
            header('location: ../store.php');
            exit();
        } 
        
        require '../assets/php/dbhandler.php';

        $sql = "SELECT * FROM products WHERE product_id = ?;";
        $stmt = $conn->prepare($sql);

        if($stmt) {
            $urlid = (int)$_GET['id'];
            $stmt->bind_param('i', $urlid);
            
            if ($stmt->execute()) {
                $result = $stmt->get_result();

                $data = $result->fetch_assoc();

                if ($stmt->affected_rows == 0) {

                    echo "<h1> Surprise! Bad link. Product no longer exists in database </h1>";
                
                } else { ?>
                    
                    <h1> Amend data for product with ID <?=$data['product_id']?> </h1>

                    <form action = 'amend-product.inc.php?id=<?=$data['product_id']?>' method="POST" class = 'centre'>
                        <table class = invisible-borders>
                            <tr>
                                <td><p>Product name: </p></td>
                                <td><input type="text" name="name" value = "<?=$data['product_name']?>"></td>
                            </tr>

                            <tr>
                                <td>Product price: </td>
                                <td><input type="number" name="price" id="price" value = <?=$data['product_price']?> step = '0.01'></td>
                            </tr>

                            <tr>
                                <td>Product image: </td>
                                <td><input type="text" name="image" id="image" value = "<?=$data['product_image']?>">
                                <a href = 'new-img.php'><p class = 'link'> or add a new image</p></a></td>
                            </tr>

                            <tr>
                                <td>Product visibility: </td>
                                <td>

                                <?php if ($data['product_visible'] == 1) { ?>
                                    
                                        <label for="visible">Visible:</label><input type="radio" name="visibility" value = '1' id = 'visible' checked>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="invisible">Hidden:</label><input type="radio" name="visibility" value = '0' id = 'invisible'>
                                    </td>
                                <?php } else { ?>
                                        <label for="visible">Visible:</label><input type="radio" name="visibility" value = '1' id = 'visible'>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="invisible">Hidden:</label><input type="radio" name="visibility" value = '0' id = 'invisible' checked>
                                <?php }; ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Amend!"></td>
                            </tr>

                    </form>

                <?php }
            }
        }

        ?>

        <br><br>
        <h1></h1>

    </div>
</body>
</html>