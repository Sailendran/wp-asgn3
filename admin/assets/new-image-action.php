<?php

$folder = '../../assets/product-images/';
$file = $folder . basename($_FILES['image']['name']);

$uploadOK = 0;

$fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // checks for attacks with fake images
    $check = getimagesize($_FILES['image']['tmp_name']);


    if ($check !== false) {

        $uploadOK = 1;

    } else {

        $uploadOK = 0;
        header('location: ../new-image.php?error=notimage');
        exit();

    };


    // checks to ensure no name clashes
    if (file_exists($file)) {

        $uploadOK = 0;
        header('location: ../new-image.php?error=duplicatefile');
        exit();

    }

    // checks to ensure file format is acceptable
    if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'jpg' && $fileType != 'jpeg') {

        $uploadOK = 0;
        header('location: ../new-image.php?error=filetype');
        exit();

    }

    if ($uploadOK !== 0) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $file)) {
            header('location: ../admin.php?msg=imagesuccess');
        } else {
            header('location: ../admin.php?msg=imagefail');
        }
    }
}