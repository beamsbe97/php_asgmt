<?php
    session_start();
    include "db_conn.php";
    echo $_POST['username'];
    echo $_POST['usertype'];
    echo $_POST['email'];

    if(empty($_POST['username']) or empty($_POST['usertype'])){
        echo "Username and account type must be filled up";
    }

    $sql = "INSERT INTO users(firstname, lastname, username, usertype, phone, email)
            VALUES('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['username']}','{$_POST['usertype']}','{$_POST['phone']}','{$_POST['email']}')";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: successReg.php");
    }
    else{
        echo"Please try again";
        header("Location: registerForm.php");
    }

?>