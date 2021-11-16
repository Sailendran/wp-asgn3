<?php

if ($SERVER['REQUEST_METHOD'] == 'POST') {

    require 'dbhandler.php';

    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "SELECT * FROM users WHERE user_email = ?;";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('s', $email);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
        
            var_dump($result);
            if ($stmt->affected_rows != 1) { //only expect one account per email
        
                if($stmt->affected_rows == 0) {
                    header('location: ../../login.php?error=noaccount');
                } else {
                    header('location: ../../login.php?error=multipleaccts');
                };

            } else { //if only one result

                $result = $stmt->get_result();

                while ($row = $result->fetch_object()) {
                    $results[] = $row;
                }
                
                var_dump($results);
                // if (password_verify($pwd, $dbpswd)) {
                //     $_SESSION['idno'] = $id;
                // } else {
                //     echo "Wrong pass";
                // }

            };
        }  
    } else {
        echo $stmt;
    }

} else {

    header('location: ../../login.php?error=directaccess');
    
};