<?php
session_start();

require 'dbhandler.php';

$sql = "DELETE FROM carts WHERE user_idno = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {

    $stmt->bind_param('i', $_SESSION['id']);

    if ($stmt->execute()) {

        header('location: ../../store.php?paid=true');
        exit();

    }
} else {
    echo $conn->error;
    header('location: store.php?error=dbdown');
    exit();
}
