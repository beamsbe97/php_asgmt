<?php
    
    session_start();
    include "db_conn.php";
    $displayAll = TRUE;

    $usersRenting = "SELECT * FROM users 
                    INNER JOIN rental 
                    ON users.id = rental.bike_id";
    $usersRentingResult = mysqli_query($conn, $usersRenting);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
</head>
<body>
    <a href="viewAllUsers.php">View All users</a>
    <a href="viewUsersRenting.php">View users renting bikes</a>
    <form action="home.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>