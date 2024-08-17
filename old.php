<?php
    session_start();
    include "db_conn.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);

    if(empty($username)){
        header("Location: index.php?error=Username is required");
        exit();
    }

    $sql = "SELECT * FROM users WHERE username='{$_POST['username']}'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['username']===$_POST['username']){
            echo "Logged In!";
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
            exit();
        }
        else{
            header("Location: index.php?error=Incorrect username");
            exit();
        }
    }

?>