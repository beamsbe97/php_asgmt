<?php
    include "db_conn.php";
    include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <br>
    <div class="group">
    <h1 style="text-align:center">Hello <?php echo $_SESSION['username']?></h1>
    <a class="card" href="viewAvailBikes.php">Available Bikes</a><br>
    <a class="card" href="searchBikesForm.php">Search Bikes</a><br>
    <a class="card" href="viewRentedBikes.php">Currently Renting</a><br>
    <a class="card" href="viewUserPastRentals.php">View Past Rentals</a><br>
    </div>
</body>
</html>

<?php
    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }
?>