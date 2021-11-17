<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'assets/admin-pages-head.php' ?>
    <title>GREENERY - Manage store</title>
</head>
<body>
    <?php include 'assets/header.php'; ?>

    <div class="body">
        <form action = amend-products>

            <div class = 'centre'><table>
                <tr>
                    <th><p>Product name</p></th>
                    <th><p>Product image</p></th>
                    <th><p>Product Visible?</p></th>
                    <th><p>Options</p></th>
                </tr>

                <?php
                require '../assets/php/dbhandler.php';

                if (isset($_SESSION)) {
                    if ($_SESSION['id'] != 2) {
                        header('location:../index.php');
                        exit();
                    } else {
                        $sql = 'SELECT product_name, product_image, product_id, product_visible FROM products;';
                        $query = $conn->query($sql);

                        if ($query) {
                            if ($query->num_rows > 0) {
                                while ($result = $query->fetch_assoc()) { ?>
                                    
                                    <tr>
                                        <td><h3> <?=$result['product_name']?> </h3></td>
                                        <td><img src="../assets/product-images/<?=$result['product_image']?>" alt="Product Image"> </td>
                                        <td><p> <?php
                                        if ($result['product_visible'] == 1) {
                                            echo "<p class = 'true'>True</p>";
                                        } else echo "<p class = 'false'>False</p>"; ?>
                                        <td><a href = 'edit-product.php?id=<?=$result['product_id']?>' class = 'centre button'> <p class = 'centre'>Edit</p> </a></td>
                                    </tr>

                                <?php }
                            };
                        }; 
                    };
                }; ?>
                
            </table></div>
</body>
</html>