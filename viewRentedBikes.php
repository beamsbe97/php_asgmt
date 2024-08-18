<?php
    include "db_conn.php";
    include_once "header.php";
    include_once "viewQueries.php";

    if($_SESSION['usertype']=="Admin"){
        $sql = "SELECT * from bikes WHERE availability='No'";
    }
    else{
        $sql = "SELECT * FROM bikes
        INNER JOIN rental
        ON bikes.id = rental.bike_id
        WHERE rental.user_id = '{$_SESSION['id']}'
        AND rental.end_time IS NULL";
    }

    $result = mysqli_query($conn, $sql);
    viewBikes($result);

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
</body>
</html>
<?php
    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }
?>
<form action=<?php echo $_SESSION['usertype']=="Admin"?"manageBikes.php":"home.php"?> method="post">
    <button type="submit">Back</button>
</form>