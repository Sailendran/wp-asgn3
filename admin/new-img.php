<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/admin-pages-head.php'?>
    <title>GREENERY - New product image</title>
</head>
<body>
    
    <?php include 'assets/header.php'?>

    <div class = 'body centrescreen'>

        <h1>Add a new image here </h1>
        <br><br><br><br><br>
        <form action = 'assets/new-image-action.php' method = 'post' enctype = 'multipart/form-data' class = 'centre'>
            <input type="file" name = 'image'>
            <br><br><br><br>
            <input type="submit" value="Submit!" class = 'centre'>
        </form>

    </div>

</body>
</html>