<?php
    include "db_conn.php";
    include_once "header.php";
    include_once "viewQueries.php";

    $sql = "SELECT *, rental.rental_id FROM users
            INNER JOIN rental
            ON users.id = rental.user_id
            WHERE rental.end_time IS NULL";
    $result = mysqli_query($conn, $sql);
    viewUsers($result);
    /*
    echo "<table border='1'><tr><th>Rental ID</th><th>User ID</th>
                                <th>First name</th><th>Last name</th>
                                <th>Username</th><th>User type</th>
                                <th>Phone Number</th><th>Email</th>
                                </tr>";
    
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['rental_id']."</td>";
        echo "<td>".$row['id']."</td>";    
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['usertype']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";
    }
    echo "</table>";*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="manageUsers.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>