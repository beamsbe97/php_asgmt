<?php
    include "db_conn.php";
    include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Hello <?php echo $_SESSION['username']?></h1>
    <a href="viewAvailBikes.php">Available Bikes</a><br>
    <a href="searchBikesForm.php">Search Bikes</a><br>
    <a href="viewUserRentals.php">Currently Renting</a><br>
    <a href="viewUserPastRentals.php">View Past Rentals</a><br>

</body>
</html>