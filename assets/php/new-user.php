<?php

if (isset($_POST['submit'])) {

    require 'dbhandler.php';
    require 'signup-validation.php';

    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $password = $_POST['user_pw'];

    // $str = var_dump($name) . var_dump($email) . var_dump($password);

    if (noEmptyField($name, $email, $password) && validEmail($email) && emailFree($email)) {

        $sql = "INSERT INTO users (`user_name`, user_email, user_password) VALUES (?, ?, ?);";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param('sss', $name, $email, $password);

            if($stmt->execute()) {
                
                echo "<h2> Welcome to Greenery @" . $name . '!';

            } else echo "Error on insertion: " . $stmt->error;

        } else echo "Unable to prepare SQL: " . $conn->error;

    };

} else {
    header('location: ../../signup.php');
}