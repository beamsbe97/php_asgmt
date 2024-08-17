<?php
    session_start();
    include "db_conn.php";
    $now = date('Y-m-d H:i:s');
    $updateRental = "UPDATE rental
                    SET end_time = '$now'
                    WHERE bike_id={$_POST['bike_id']}";
    $result = mysqli_query($conn, $updateRental);
    if($result){
        $updateAvail = "UPDATE bikes 
                        SET availability='Yes'
                        WHERE id={$_POST['bike_id']}";
        $result = mysqli_query($conn, $updateAvail);
        if($result){
            echo "Bike returned successfully";
        }   
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
    <form action="viewUserRentals.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>