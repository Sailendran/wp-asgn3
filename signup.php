<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mohave&family=Teko:wght@300&display=swap" rel="stylesheet">

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
                    <p class = 'left' id = 'pw1-text'> Pick a nickname that your friends might call you. Only you can see this name. </p>
                </div>
                
                <br><br><br><hr><br><br>

                <div>
                    <label for="email">E-mail:  </label><input type="email" name="user_email" id="email">
                    <br>
                    <p class = 'right' id = 'email-text'>Your e-mail must be active; reciepts and password recovery codes will be sent to this e-mail address</p>
                </div>

                <br><br><br><hr><br><br>
                
                <div class = 'right'>
                    <label for="user_pw">Password: </label><input type="password" name="user_pw" id="pswd1">
                    <br><br>
                    <label for="cf_pw">Confirm password: </label><input type="password" name="pw_cf" id="pswd2">
                    <p class = 'left' id = 'pw1-text'> Pick a strong password; ideally with more than 8 characters including at least:
                        <br> 
                        1 $¥M₿oł&nbsp; ONE UPPERCASE and 1 numb3r </p>
                </div>

                <input type="submit" value="Sign up now!" class = 'centre' name = 'submit'>

            </div>
        </fieldset>
    </form>

    </div>
    <br><br><br>
</body>
</html>