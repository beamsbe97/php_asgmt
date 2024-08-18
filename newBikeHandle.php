<?php
    session_start();
    include "db_conn.php";

    if(empty($_POST['rent_location']) or empty($_POST['description']) 
    or empty($_POST['cost_per_hour'])){
        header("Location: newBikeForm.php?msg=All fields must be filled out");
    }
    elseif(!is_numeric($_POST['cost_per_hour'])){
        header("Location: newBikeForm.php?msg=Cost per hour must be Numeric");
    }
    else{
        $sql = "INSERT INTO bikes(rent_location, description, cost_per_hour, availability)
                VALUES('{$_POST['rent_location']}','{$_POST['description']}',
                        '{$_POST['cost_per_hour']}', 'Yes')";

        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: newBikeForm.php?msg=Bike Registered Successfully!");
        }
        else{
            header("Location: newBikeForm.php?msg=Something went wrong. Please try again");
        }
    }
?>