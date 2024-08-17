
<?php
    include "db_conn.php";
    include_once "header.php";
    require_once "viewQueries.php";
    
    $sql = "SELECT * FROM bikes WHERE availability='Yes'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>=1){
        viewBikes($result);
    }
    else{
        echo "There are no available bikes at the moment";
    }
    
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
        <input type="text" name="bike_id">
        <button type="submit">Confirm</button>
    </form>
    <form action="home.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>
