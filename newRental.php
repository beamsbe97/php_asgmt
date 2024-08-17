<?php
    session_start();
    include "db_conn.php";

    if(!is_int($_POST['bike_id'])){
        echo "Invalid Bike ID. Please enter an integer<br>";
        echo "<a href='viewAvailBikes.php'>Back</a>";
    }
?>

<?php    
    $now = date('Y-m-d H:i:s');


    $idCheck = "SELECT * FROM bikes
                WHERE id={$_POST['bike_id']}";

    $insertRental = "INSERT INTO rental(bike_id, user_id, start_time) 
            VALUES ({$_POST['bike_id']}, {$_SESSION['id']}, '$now')";
    $result = mysqli_query($conn, $insertRental);
    if($result){
        $updateAvail = "UPDATE bikes 
                        SET availability='No'
                        WHERE id={$_POST['bike_id']}";
        $result = mysqli_query($conn, $updateAvail);
        if($result){
            echo "Bike rented successfully!";
            echo "Your rental period started at '{$now}'";
            echo "Cost per hour:".
            header("Location: home.php");
        }   
    }
?>