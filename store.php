<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREENERY - Store</title>

</head>

<body>
    
    <?php include 'assets/php/header.php'?>

    <form onkeydown="return event.key != 'Enter';">
    <div class = 'centre'>
        
        <div class = 'store-item'>
            <img src = 'assets/product-images/noImage.png'>
            <?php include 'assets/php/q-selector.php'?>
        </div>
           
        <div class = 'store-item'>
            <img src = 'assets/product-images/noImage.png'>
            <?php include 'assets/php/q-selector.php'?>
        </div>

    </div>
    </form>

</body>
</html>