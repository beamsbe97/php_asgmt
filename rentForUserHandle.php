<?php
    include "db_conn.php";
    include_once "header.php";
    $now = date('Y-m-d H:i:s');
    $insertRental = "INSERT INTO rental(bike_id, user_id, start_time) 
            VALUES ({$_POST['bike_id']}, {$_POST['user_id']}, '$now')";
    $result = mysqli_query($conn, $insertRental);
    if($result){
        $updateAvail = "UPDATE bikes 
                        SET availability='No'
                        WHERE id={$_POST['bike_id']}";
        $result = mysqli_query($conn, $updateAvail);
        if($result){
            header("Location: rentForUser.php?msg=Bike rented successfully");
        }   
    }
?>