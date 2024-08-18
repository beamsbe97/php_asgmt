<?php
    session_start();
    include "db_conn.php";
?>

<?php    
    $now = date('Y-m-d H:i:s');
    if(!is_numeric($_POST['bike_id'])){
        header("Location: viewAvailBikes.php?msg=Incorrect Bike ID format. Please enter an integer");
    }

    $sql = "SELECT * FROM bikes
            WHERE id={$_POST['bike_id']}
            AND availability='Yes'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_query($conn, $sql);
    $bikesRow = mysqli_fetch_assoc($queryResult);

    if(mysqli_num_rows($queryResult)===0){
        header("Location: viewAvailBikes.php?msg=No available bike with that Bike ID. Please choose a Bike ID from the available list");
    }
    else{
        $insertRental = "INSERT INTO rental(bike_id, user_id, start_time) 
            VALUES ({$_POST['bike_id']}, {$_SESSION['id']}, '$now')";
    
        $result = mysqli_query($conn, $insertRental);
    
        
        if($result){
            $updateAvail = "UPDATE bikes 
                            SET availability='No'
                            WHERE id={$_POST['bike_id']}";
            $result = mysqli_query($conn, $updateAvail);
            if($result){
                $msg ="Bike rented successfully!<br>Your rental period started at '{$now}'<br>Cost per hour:  {$bikesRow['cost_per_hour']}SGD";
                header("Location: home.php?msg=$msg");
            }   
        }

    }

    
?>