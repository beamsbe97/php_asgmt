<?php
    session_start();
    include "db_conn.php";

    //$username = $_POST['username'];

    if(empty($_POST['username'])){
        header("Location: index.php?error=Username is required");
        exit();
    }

    $sql = "SELECT * FROM users WHERE username='{$_POST['username']}'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if($row['username']===$_POST['username']){
            echo "Logged In!";
            $_SESSION['username'] = $row['username'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['usertype'] = $row['usertype'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
            exit();
        }
        
    }
    else{
        header("Location: index.php?msg=Incorrect username");
        exit();
    }



?>