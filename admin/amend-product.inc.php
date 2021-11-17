<?php
require '../assets/php/dbhandler.php';

function check_price($val) {

    try {
        $val = (float)$val;
        return $val;
    } catch (Exception $e) {
        return false;
    }
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/admin-pages-head.php'?>
    <title>GREENERY - Product update</title>
</head>
<body>

<?php
    include 'assets/header.php';


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_SESSION['id'] == 2) {
            $sql = "UPDATE products SET product_name = ?, product_price = ?, product_image = ?, product_visible = ? WHERE product_id = ?;";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $name = $_POST['name'];
                if (!check_price($_POST['price'])) {
                    header('location: ../edit-product.php?id=' . $_GET['id']);
                    exit();
                }
                $img = $_POST['image'];
                $seen = $_POST['visibility'];
                $price = check_price($_POST['price']);

                $stmt->bind_param('sdsii', $name, $price, $img, $seen, $_GET['id']);

                if ($stmt->execute()) {
                    echo "<h1> Successfully updated! </h1>
                    <br> <a href = 'manage-products.php'> Return home </a>";
                }
            }
        }

    }