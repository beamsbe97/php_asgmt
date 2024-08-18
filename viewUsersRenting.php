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