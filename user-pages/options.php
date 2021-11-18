<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/user-pages-head.php';?>
    <title>GREENERY - Options</title>
</head>
<body>

    <?php include 'assets/header.php';?>
    <br><br><br>

    <div class = 'body'>
        <form action = 'assets/edit-info.php' method = 'POST'>
        <table class = 'centre'>
            <tr>
                <th colspan = '2'>
                    <h3>Edit these values and hit submit to submit them, or hit refresh if you make a mistake</h3>
                </th>
            </tr>
        <?php
            // var_dump($_SESSION);
            require '../assets/php/dbhandler.php';

            $sql = "SELECT * FROM users WHERE user_idno = " . $_SESSION['id']. ";";
            $query = $conn->query($sql);
            
            if ($query) {

                $result = $query->fetch_assoc();

                foreach ($result as $key => $value) {
                    if ($value == NULL || $value == 0 || $value == '') {

                        $result[$key] = '" placeholder = "No value yet"';
                    
                    }
                }

            } else {

                header('location:../index.php?error=dberror');

            };
            
            ?>
                
                <tr>
                    <td>
                        <p>Name:</p>
                    </td>
                    <td><input type="text" value = <?=$result['user_name']?> name = "name"></td>
                </tr>
                <tr>
                    <td>
                        <p>E-mail:</p>
                    </td>
                    <td><input type="email" value="<?=$result['user_email']?>" name = "email"></td>
                </tr>
                <tr>
                    <td>
                        <p>Phone number</p>
                    </td>
                    <td><input type="number" value="<?=$result['user_phone']?>" name = "phone" max = 999999999999 step="1"></td>
                </tr>
                <tr>
                    <td>
                        <p>Unit number</p>
                    </td>
                    <td><input type="number" value="<?=$result['address_number']?>" name = "addnum" max = 9999></td>
                </tr>
                <tr>
                    <td>
                        <p>Street</p>
                    </td>
                    <td><input type="text" value="<?=$result['address_street']?>" name = "street"></td>
                </tr>
                <tr>
                    <td>
                        <p>County/District/Taman (o.e.)</p>
                    </td>
                    <td><input type="text" value="<?=$result['address_taman']?>" name = "taman"></td>
                </tr>
                <tr>
                    <td>
                        <p>City/town (o.e.)</p>
                    </td>
                    <td><input type="text" name="" value="<?=$result['address_city']?>" name = "city"></td>
                </tr>
                <tr>
                    <td>
                        <p>State</p>
                    </td>
                    <td><input type="text" value="<?=$result['address_state']?>" name = "state"></td>
                </tr>
                <tr>
                    <td>
                        <p>Postcode</p>
                    </td>
                    <td><input type="number" value="<?=$result['address_postcode']?>" name = "postcode" max = 9999999999></td> 
                    <!-- Max postcode length is 10, google says -->
                </tr>
                <tr>
                    <td>
                        <p>Country</p>
                    </td>
                    <td><input type="text" value="<?=$result['address_country']?>" name = "country"></td>
                </tr>

                <tr>
                    <td><input type="reset" value="Reset Form" class = 'formbtn'></td>
                    <td><input type="submit" value="Edit user data!" class = 'formbtn'></td>
                </tr>
            
        </table>
        </form>
        <br><br><br><p>Scroll further to reach account delete button</p><br><br><br>

        <form action = 'assets/confirm-delete.php' method = "POST">
            <input type="submit" value="Delete Account" id = 'delete-btn'>
        </form>
        <br><br><br><br><br>
    </div>
</body>
</html>