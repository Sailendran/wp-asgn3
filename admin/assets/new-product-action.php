<?php
session_start();

if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['id'] != 2) {
    header('location: ../../index.php');
}

if (empty($_POST['name']) || empty($_POST['price']) || empty($_POST['image']) || empty($_POST['visibility']) ) {
    header('location: ../new-product.php?error=emptyfield');
    exit();
}

require '../../assets/php/dbhandler.php';

$sql = "INSERT INTO products (product_name, product_price, product_image, product_visible) VALUES (?, ?, ?, ?);";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param('sdsi', $_POST['name'], $_POST['price'], $_POST['image'], $_POST['visibility']);

    if ($stmt->execute()) {
        header("location: ../admin.php?status=newitem");
    } else echo "execute fail";

} else echo $conn->error;
