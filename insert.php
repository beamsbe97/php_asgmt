<?php
    include("db_conn.php");

    $firstname = $_POST['username'];

    $sql = "INSERT INTO USERS (firstname, lastname, 
                                username, password, 
                                usertype, phone, email)
            VALUES(\)";

    mysqli_close($conn);
?>