<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require 'dbhandler.php';

    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "SELECT * FROM users WHERE user_email = ?;";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('s', $email);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
        
            if ($stmt->affected_rows != 1) { //only expect one account per email
        
                if($stmt->affected_rows == 0) {
                    header('location: ../../login.php?error=noaccount');
                } else {
                    header('location: ../../login.php?error=multipleaccts');
                };

            } else { //if only one result

                $data = $result->fetch_assoc();
                $dbpwd = $data['user_password'];

                if (password_verify($pwd, $dbpwd)) {
                    session_start();
                    $_SESSION['id'] = $data['user_idno'];
                    header('location: ../../store.php?status=newlogin');
                };

            };
        }  
    } else {
        echo 'Failed' . $stmt;
    }

} else {

    header('location: ../../login.php?error=directaccess');
    
};