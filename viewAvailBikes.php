<?php
    session_start();
    include "db_conn.php";

    $sql = "SELECT * FROM bikes WHERE availability='Yes'";
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
    <form action="newRental.php" method="post">
        <label>Enter the Bike ID to rent</label>
        <input type="text" name="bikeid">
        <button type="submit">Confirm</button>
    </form>
    <form action="home.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>
