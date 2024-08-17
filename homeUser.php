<?php
    session_start();
    include "db_conn.php";
    $sql = "SELECT * FROM users WHERE username='{$_SESSION['username']}'";
    $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Hello <?php echo $_SESSION['username']?></h1>
    <a href="viewAvailBikes.php">Available Bikes</a>
    <a href="viewUserRentals.php">Currently Renting</a>
    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
</body>
</html>