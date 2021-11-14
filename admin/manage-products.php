<?php

    if (isset($_SESSION)) {
        if ($_SESSION['user'] != 'admin') {
            header('location:../index.php');
            exit();
        } else {
            ?>

        <!-- HTML HERE -->

        <?php
        };
    } else {
        header('location:../login.php');
    };