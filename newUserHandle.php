<?php
    session_start();
    include "db_conn.php";
    echo $_POST['username'];
    echo $_POST['usertype'];
    echo $_POST['email'];

    if(empty($_POST['username']) or empty($_POST['usertype']) or empty($_POST['email'])
    or empty($_POST['firstname']) or empty($_POST['lastname']) or empty($_POST['phone'])){
        
        header("Location: newUserForm.php?msg=All fields must be filled up");
    }
    else{
        $sql = "INSERT INTO users(firstname, lastname, username, usertype, phone, email)
            VALUES('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['username']}','{$_POST['usertype']}','{$_POST['phone']}','{$_POST['email']}')";
    
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: index.php?msg=Registration Successful. Please enter your credentials to log in");
        }
        else{
            header("Location: index.php?msg=Resgistraion Unsuccessful. Pleas try again");
        }
    }
    
?>