<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/php/default-head.php'?>
    <title>GREENERY - Landing page</title>
</head>
<body>
    <?php include 'assets/php/header.php'?>

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



</body>
</html>