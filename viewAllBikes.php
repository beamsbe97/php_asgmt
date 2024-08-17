<?php
    session_start();
    include "db_conn.php";
    require_once "viewQueries.php";

    $sql = "SELECT * FROM bikes";
    $result = mysqli_query($conn, $sql);

    viewBikes($result);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="newBikeForm.php" method="post">
        <button type="submit">Register A New Bike</button>
    </form>
    <form action="manageBikes.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>