<?php
    include "db_conn.php";
    include_once "header.php";

    $sql = "SELECT * FROM bikes
            INNER JOIN rental
            ON bikes.id = rental.bike_id
            WHERE rental.user_id = '{$_SESSION['id']}'
            AND rental.end_time IS NULL";
    $result = mysqli_query($conn, $sql);
    echo "<table border='1'><tr><th>Bike ID</th><th>Rent Location</th><th>Description</th><th>Cost per hour</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['rent_location']."</td>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['cost_per_hour']."</td>";
        echo "</tr>";
    }
    echo "</table>";

?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="returnBike.php" method="post">
        <label>Enter Bike ID to return:</label>
        <input type="text" name="bike_id">
        <button type="submit">Return</button>
    </form>
    <form action="home.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>