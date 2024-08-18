<?php
    include "db_conn.php";
    include "header.php";
    include "viewQueries.php";

    $allUsers="SELECT * FROM users";
    $results = mysqli_query($conn, $allUsers);
    viewUsers($results);
    /*
    echo "<table border='1'><tr><th>User ID</th>
                                <th>First name</th><th>Last name</th>
                                <th>Username</th><th>User type</th>
                                <th>Phone Number</th><th>Email</th>
                                </tr>";
    
    while($row = mysqli_fetch_assoc($allUserResults)){
        echo "<tr>";
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
    <title>All Users</title>
</head>
<body>
    <form action="manageUsers.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>