<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/sidebar.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Mohave&family=Teko:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Mohave&family=Teko:wght@300&display=swap" rel="stylesheet">
    <title>GREENERY - Confirm delete?</title>
</head>


<body>

        <form action="delete-user.php" method = "POST">
            <br><br><br><br><br>
            <input type = 'hidden' value = 'true' name = 'delete'>
            <input type="submit" value="Yes, delete my account" id = 'deletebtn'>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </form>

        <a href="../options.php"><button id = 'deletentbtn' class = 'centrescreen'>No, keep my account!</button></a>

</body>
</html>