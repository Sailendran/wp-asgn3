<?php
session_start();

echo "F";

var_dump($_POST);

if ($_POST['delete'] === 'true') {

    require '../../assets/php/dbhandler.php';

    $sql = "DELETE FROM users WHERE user_idno = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {

        $stmt->bind_param('i', $_SESSION['id']);

        if ($stmt->execute()) {

            //task successfully failed
            header('location: ../../index.php');

        }
    }

}