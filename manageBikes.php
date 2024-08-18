<?php
    include "db_conn.php";
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
    <a class="card" href="viewAllBikes.php">View All Bikes</a><br>
    <a class="card" href="newBikeForm.php">Register New Bike</a><br>
    <a class="card" href="viewAvailBikes.php">View Available Bikes</a><br>
    <a class="card" href="viewRentedBikes.php">View Rented Bikes</a><br>
    <a class="card" href="searchBikesForm.php">Search Bikes</a><br>
    <a class="card" href="rentForUser.php">Rent bike for user</a><br>

    <form action="home.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>