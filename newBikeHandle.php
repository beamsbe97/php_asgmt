<?php
    session_start();
    include "db_conn.php";

    $sql = "INSERT INTO bikes(rent_location, description, cost_per_hour, availability)
            VALUES('{$_POST['rent_location']}','{$_POST['description']}',
                    '{$_POST['cost_per_hour']}', '{$_POST['availability']}')";

    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: newBikeSuccess.php");
    }
    else{
        echo "Please try again";
        header("Location: newBikeHandle.php");
    }
?>