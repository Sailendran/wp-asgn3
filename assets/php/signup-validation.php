<?php
function noEmptyField($name, $email, $password) {

    if (empty($name)) {
        header('location: ../../signup.php?error=emptyname');
        exit();
    } else if (empty($email)) {
        header('location: ../../signup.php?error=emptyemail');
        exit();
    } else if (empty($password)) {
        header('location: ../../signup.php?error=emptypswd');
        exit();
    } else {
        return true;
    };

};

function validEmail($email) {
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: ../../signup.php?error=invalidemail');
        exit();
    } else {
        return true;
    };
};

function emailFree($email) {
    require 'dbhandler.php';
    $sql = "SELECT * FROM users WHERE user_email = ?;";
    $stmt = $conn->prepare($sql);

    if ($stmt) {


        $stmt->bind_param('s', $email);

        if ($stmt->execute()) {

            $stmt->store_result();
            // var_dump($stmt->num_rows());

            if ($stmt->num_rows() == 0) {

                return true;

            } else {
                header('location: ../../signup.php?error=emailtaken');
                return false;
                exit();
            }

        } else {

            header('location: ../../signup.php?error=sqlfailed');
            exit();

        }


    } else {
        header('location: ../../signup.php?error=dbdown');
    }

};