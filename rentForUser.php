<?php
    include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="rentForUserHandle.php" method="post">
        <label>Bike ID:</label>
        <input type="text" name="bike_id"><br>
        <label>User ID:</label>
        <input type="text" name="user_id"><br>
        <button type="submit">Create Rental</button>

    </form>
    <form action="manageBikes.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>