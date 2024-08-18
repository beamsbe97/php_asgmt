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
</head>
<body>
    <h1>Hello <?php echo $_SESSION['firstname']?></h1>
    <a class="card" href="manageBikes.php">Manage Bikes</a>
    <a class="card" href="manageUsers.php">Manager Users</a>

</body>
</html>