<?php
    session_start();
    include "db_conn.php";

    if($_SESSION['usertype'] === 'Admin'){
        header("Location: homeAdmin.php".(isset($_GET['msg'])?'?msg='.$_GET['msg']:''));
    }
    else{
        header("Location: homeUser.php".(isset($_GET['msg'])?'?msg='.$_GET['msg']:''));
    }   
?>
