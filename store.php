<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'assets/php/default-head.php'?>
    <title>GREENERY - Store</title>

</head>

<body>
    
    <?php include 'assets/php/header.php'?>

    <form onkeydown="return event.key != 'Enter';">

    <?php
        if (isset($_GET)) {
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'newlogin') {
                    echo "<h1> Welcome back to Greenery, " . $_GET['name'] . "</h1>";
                }

            } else if (isset($_GET['paid'])) {
                    echo "<br><br><h1> Payment successful! </h1><br><br>";
            }
        }
        
        ?>

    <div class = 'centre body'>

        <?php include 'assets/php/product-display.php'?>

    </div>
    </form>

</body>
</html>