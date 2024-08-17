<?php
    include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="searchBikesHandle.php" method="post">
        <label>Bike ID:</label>
        <input type="text" name="id"><br>
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
        <button type="submit">Search</button>

    </form>
    <form action="home.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>