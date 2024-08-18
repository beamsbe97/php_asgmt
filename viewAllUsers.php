<?php
    include "db_conn.php";
    include "header.php";
    include "viewQueries.php";

    $allUsers="SELECT * FROM users";
    $results = mysqli_query($conn, $allUsers);
    viewUsers($results);

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