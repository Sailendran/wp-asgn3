<?php
session_start();



function write($uid, $pid) {
    require 'dbhandler.php';
    $sqlf = "INSERT INTO carts (user_idno, product_id, quantity) VALUES (?, ?, ?);";
    $stmtf = $conn->prepare($sqlf);

    $stmtf->bind_param('iii', $uid, $pid, $_POST['quantity']);

    if ($stmtf->execute()) {
        return 0;
    };
};



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'dbhandler.php';
    
    $sql = "SELECT * FROM carts WHERE user_idno = ? and product_id = ?;";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param('ii', $_SESSION['id'], $_POST['prod_id']);

    if ($stmt) {
        if ($stmt->execute()) {
            $stmt->store_result();

            if ($stmt->num_rows > 0) {

                $sql2 = "DELETE FROM carts WHERE user_idno = ? and product_id = ?;";
                $stmt2 = $conn->prepare($sql2);

                if ($stmt2) {

                    $stmt2->bind_param('ii', $_SESSION['id'], $_POST['prod_id']);

                    if ($stmt2->execute()) {

                        //writing over
                        write($_SESSION['id'], $_POST['prod_id']);

                    }
                } else {
                    echo $conn->error;
                    header('location: store.php?error=dbdown');
                    exit();
                }

            } else {

                write($_SESSION['id'], $_POST['prod_id']);

            }
        } else {
            echo $conn->error;
            header('location: store.php?error=sqlfailed');
            exit();
        }

    } else {
        echo $conn->error;
        header('location: store.php?error=dbdown');
        exit();
    };

};

header('location: ../../store.php?status=addedtocart');