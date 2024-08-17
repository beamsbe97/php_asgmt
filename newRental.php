<?php
    session_start();
    include "db_conn.php";
    $now = date('Y-m-d H:i:s');
    $insertRental = "INSERT INTO rental(bike_id, user_id, start_time) 
            VALUES ({$_POST['bikeid']}, {$_SESSION['id']}, '$now')";
    $result = mysqli_query($conn, $insertRental);
    if($result){
        $updateAvail = "UPDATE bikes 
                        SET availability='No'
                        WHERE id={$_POST['bikeid']}";
        $result = mysqli_query($conn, $updateAvail);
        if($result){
            echo "Bike rented successfully";
            header("Location: home.php");
        }
        
    }
?>