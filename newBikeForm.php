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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="newBikeHandle.php" method="post">
        <label>Rent Location:</label>
        <input type="text" name="rent_location"><br>
        <label>Description:</label>
        <input type="text" name="description"><br>
        <label>Cost Per Hour:</label>
        <input type="text" name="cost_per_hour"><br>
        <label>Availability:</label><br>
        <input type="radio" name="availability" value="Yes"><br>
        <label>Yes</label><br>
        <input type="radio" name="availability" value="No"><br>
        <label>No</label><br>
        <button type="submit">Register Bike</button>

    </form>
    <form action="home.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>