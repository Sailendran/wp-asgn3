<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/php/default-head.php'?>
    <title>GREENERY - Sign Up</title>
</head>
<body>
    <?php include 'assets/php/header.php'?>

    <div class="body">

    <h2 class = 'centre'>Sign up!</h2>

    <form action = 'assets/php/new-user.php' method = 'POST'>
        <fieldset>
            <legend><h3>Please enter the following details:</h3></legend>

            <div class = 'signup-form'>

                <div>
                    <input class = 'right' type="text" name="user_name" id="name"><label for="user_pw" class = 'right'>Your name:&nbsp;</label>
                    <br><br>
                    <p class = 'left' id = 'name-text'> Pick a nickname that your friends might call you. Only you can see this name. </p>
                </div>
                
                <br><br><br><hr><br><br>

                <div>
                    <label for="email">E-mail:  </label><input type="email" name="user_email" id="email">
                    <br>
                    <p class = 'left' id = 'email-text'>Your e-mail must be active; reciepts and password recovery codes will be sent to this e-mail address</p>
                </div>

                <br><br><br><hr><br><br>
                <script src = 'assets/js/signup-pswd.js'> </script>
                <div class = 'right'>
                    <label for="user_pw">Password: </label><input type="password" name="user_pw" id="pswd1" onchange = 'passwordMatch();'>
                    <br><br>
                    <label for="cf_pw">Confirm password: </label><input type="password" name="pw_cf" id="pswd2" onchange = 'passwordMatch();'>
                    <p class = 'left' id = 'pw1-text'> Pick a strong password; ideally with more than 8 characters including at least:
                        <br> 
                        1 $¥M₿oł&nbsp; ONE UPPERCASE and 1 numb3r </p>
                </div>

                <input type="submit" value="Sign up now!" class = 'centre' name = 'submit' id = 'submit' disabled>

            </div>
        </fieldset>
    </form>

    </div>
    <br><br><br>

    <?php
    if(isset($_GET)){


            if(isset($_GET['error'])){;

                echo '<script src="assets/js/signup-errors.js"></script>';
                
                if($_GET['error'] === 'emptyemail'){
                    echo '<script>emptyemail();</script>';
                } else if ($_GET['error'] == 'emptyname') {
                    echo '<script>emptyname();</script>';
                } else if ($_GET['error'] == 'emptypswd') {
                    echo '<script>emptypswd();</script>';
                } else if ($_GET['error'] == 'invalidemail') {
                    echo '<script>invalidemail();</script>';
                } else if ($_GET['error'] == 'emailtaken') {
                    echo '<script>emailtaken();</script>';
                } else if ($_GET['error'] == 'sqlfail') {
                    echo '<script>sqlfail();</script>';
                } else if ($_GET['error'] == 'dbdown') {
                    echo '<script>dbdown();</script>';
                }   else {
                    echo '<script>unknown();</script>'; // alert that an unknown error occoured
                }
            }
        }
        
    ?> 

</body>
</html>