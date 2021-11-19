<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/admin-pages-head.php'?>
    <title>GREENERY - New product</title>
</head>
<body>
    <?php include 'assets/header.php'?>

    <div class = 'body'>
        
        <form action="assets/new-product-action.php" method = "POST">
            <table>
                
                <tr>
                    <th><h3>Product attribute</h3></th>
                    <th><h3>Option</h3></th>
                </tr>

                <tr>
                    <td>Product name</td>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <td>Product price</td>
                    <td><input type="number" name="price" step = '0.01' min = '0'></td>
                </tr>

                <tr>
                    <td>Product image</td>
                    <td><input type="text" name="image" value = 'noImage.png'></td>
                </tr>

                <tr>
                    <td>Product visibility</td>
                    <td>
                        <label for="visible">Visible:</label><input type="radio" name="visibility" value = '1' id = 'visible' checked>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="invisible">Hidden:</label><input type="radio" name="visibility" value = '0' id = 'invisible'>
                    </td>
                </tr>

            </table>

            <br><br><br><br>
            <input type="submit" value="Add new product!" class = 'centre'>
        </form>

    </div>
</body>
</html>