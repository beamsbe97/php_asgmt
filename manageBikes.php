<?php
    session_start();
    include "db_conn.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="viewAllBikes.php">View All Bikes</a>
    <a href="viewAvailBikes.php">View Available Bikes</a>
    <a href="viewRentedBikes.php">View Rented Bikes</a>
    <form action="home.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>