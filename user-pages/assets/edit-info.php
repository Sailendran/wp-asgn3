<?php
session_start();
//var_dump($_POST); 
    /* array(9) { ["name"]=> string(8) "Deletion" ["email"]=> string(15) "test@delete.com" 
    ["phone"]=> string(0) "" ["addnum"]=> string(0) "" ["street"]=> string(0) "" ["taman"]=> string(0) "" 
    ["state"]=> string(0) "" ["postcode"]=> string(0) "" ["country"]=> string(0) "" } */

if ($_SERVER["REQUEST_METHOD"]) {

    //return to options page with error if name or email empty

    if (empty($_POST['name']) || !(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
        if (empty($_POST['name'])) {
            header('location: ../options.php?error=emptyname');
            exit();
        } else if (empty($_POST['email'])) {
            header('location: ../options.php?error=emptyemail');
            exit();
        }
    }

    //re-insert all data into database
    require '../../assets/php/dbhandler.php';

    $id = $_SESSION['id'];

    $sql = "UPDATE users SET `user_name` = ?, user_email = ?, user_phone = ?, 
    address_number = ?, address_street = ?, address_taman = ?, address_city = ?, address_state = ?, address_postcode = ?, address_country = ?
    WHERE user_idno = ?;";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param('ssiissssisi', $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['addnum'], $_POST['street'], $_POST['taman'], $_POST['city'], $_POST['state'], $_POST['postcode'], $_POST['country'], $_SESSION['id']);

    if ($stmt->execute()) {

        if ($stmt->affected_rows == 1) {
            header('location:../options.php?success=true');
        } else if ($stmt->affected_rows > 1) {
            header('location:../options.php?error=useridrepeat');
        } else {
            //header('location:../options.php?error=idnotexist');
            echo $stmt->affected_rows;
        }
        
   } else {
       echo "bad SQL";
   }
}