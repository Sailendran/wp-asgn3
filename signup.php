<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Mohave:wght@300&display=s">

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
                    <label for="email">E-mail:  </label><input type="email" name="user_email" id="email">
                    <p class = 'right' id = 'email-text'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, ratione.</p>
                </div>

                <br><br><br><hr><br><br>
                
                <div class = 'right'>
                    <label for="user_pw">Password: </label><input type="password" name="user_pw" id="pswd1">
                    <br><br>
                    <label for="cf_pw">Confirm password: </label><input type="password" name="pw_cf" id="pswd2">
                    <p class = left id = 'pw1-text'> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, perferendis. </p>
                </div>

                <input type="submit" value="Sign up now!" class = 'centre'>
            </div>
        </fieldset>
    </form>

    </div>
</body>
</html>