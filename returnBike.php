<?php
    session_start();
    include "db_conn.php";
    $now = date('Y-m-d H:i:s');

    if(!is_numeric($_POST['bike_id'])){
        header("Location: viewRentedBikes.php?error=Incorrect Bike ID format. Please enter an integer");
    }

    $sql = "SELECT * FROM rental
            WHERE user_id={$_SESSION['id']}
            AND bike_id={$_POST['bike_id']}
            AND end_time IS NULL";
    $queryResult = mysqli_query($conn, $sql);
    $rentalRow = mysqli_fetch_assoc($queryResult);
    if(mysqli_num_rows($queryResult)===0 && $_SESSION['usertype']!="Admin"){
        header("Location: viewRentedBikes.php?error=You have no active rental with the specified bike");
    }
    else{
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
                if($_SESSION['usertype']=="Admin"){
                    header("Location: viewRentedBikes.php?msg=Bike returned successfully");
                }
                else{
                    $bikeQuery="SELECT cost_per_hour FROM bikes WHERE id={$_POST['bike_id']}";
                    $bikeRow=mysqli_fetch_assoc(mysqli_query($conn, $bikeQuery));
                    $interval=round((strtotime($now)-strtotime($rentalRow['start_time']))/3600);
                    $total= $interval*($bikeRow['cost_per_hour']);
                    header("Location: home.php?msg=Bike returned successfully. Rental Cost:  $total SGD");
                }
            }   
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
    <form action="viewRentedBikes.php" method="post">
        <button type="submit">Back</button>
    </form>
</body>
</html>