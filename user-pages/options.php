<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/user-pages-head.php'?>
    <title>GREENERY - Options</title>
</head>
<body>

    <?php include 'assets/header.php'?>
    <br><br><br>

    <div class = 'body'>
        <table class = 'centre'>
            <tr>
                <th  colspan = '2'>
                    Edit these values and hit submit to submit them, or hit refresh if you make a mistake
                </th>
            </tr>
        <?php
            var_dump($_SESSION);
            require '../assets/php/dbhandler.php';

            $sql = "SELECT * FROM users WHERE user_email = " . $_SESSION['email']. ";";
            $query = $conn->query($sql);

            $items = ['user_name', 'user_email', 'user_phone', 'address_number', 'address_street', 'address_taman', 'address_city', 'address_state', 'address_postcode', 'address_country'];
            $headings = ['Your name', 'E-mail', 'Phone number', 'House number', 'Street name', 'Taman/District/County, o.e.', 'City', 'State', 'Postcode', 'Country'];
            
            if ($query) {
                while ($result = $query->fetch_assoc()) {

                    echo $result;

                }
            }
        ?>
            
        </table>
        <br><br><br>

        <form action = confirm-delete.php>
            <input type="submit" value="Delete Account" id = 'delete-btn'>
        </form>
    </div>
</body>
</html>