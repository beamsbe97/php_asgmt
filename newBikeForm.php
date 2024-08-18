<?php
    include "db_conn.php";
    include "header.php";
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
<div class="container">
    <form class="form" action="newBikeHandle.php" method="post">
        <div class="input-field"><input type="text" name="rent_location" placeholder="Rent Location"><br></div>
        <div class="input-field"><input type="text" name="description" placeholder="Description"><br></div>
        <div class="input-field"><input type="text" name="cost_per_hour" placeholder="Cost Per Hour"><br></div>
        <button type="submit">Register Bike</button>

    </form>
</div>
    <form action="home.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>