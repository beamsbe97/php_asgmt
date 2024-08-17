<?php
    session_start();
    include "db_conn.php";

    if($_SESSION['usertype'] === 'Admin'){
        header("Location: homeAdmin.php");
    }
    else{
        header("Location: homeUser.php");
    }
    
?>