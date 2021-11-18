<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/php/default-head.php'?>
    <title>GREENERY - Landing page</title>
</head>
<body>
    <?php include 'assets/php/header.php';
    
    if (isset($_GET)) {
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 'newuser') {
                echo "<h1> Welcome to Greenery, " . $_GET['name'] . '!';
            }
        }
    }
    ?>

    <div class = 'centrescreen body'>

        <form action = 'assets/php/login-action.php', method="POST">
            <fieldset>
                <legend><h2>Log in!</h2></legend>
                    <label for = 'email'>E-mail: </label>
                    <input type="email" name="email" id="email">
                    <br><br><br><br>
                    <label for = 'password'>Password: </label>
                    <input type="password" name="password" id="password">
                    <br><br><br><br>
                    <input type="submit" value="Log in!" name = 'submit' class = 'centre'>

        </form>
    </div>

    <?php

        if(isset($_GET)){


            if(isset($_GET['error'])){;

                echo '<script src="assets/js/login-errors.js"></script>';
                
                if($_GET['error'] === 'emptyfield'){
                    echo '<script>emptyfield();</script>';
                } else if ($_GET['error'] == 'noacct') {
                    echo '<script>noacct();</script>';
                } else if ($_GET['error'] == 'multipleacct') {
                    echo '<script>multipleaccts();</script>';
                } else if ($_GET['error'] == 'wrongpass') {
                    echo '<script>wrongpass();</script>';
                } else if ($_GET['error'] == 'directaccess') {
                    echo '<script>directaccess();</script>';
                } else {
                    echo '<script>unknown();</script>'; // alert that an unknown error occoured
                }
            }
        }
        
    ?>

<script src = 'assets/js/login-errors.js'> unknown(); </script>
</body>
</html>