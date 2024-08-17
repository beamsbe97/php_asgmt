<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="wrapper">
            <a href="home.php">Home</a>
            <a href="logout.php">Logout</a>  
        </div>
    </nav>
    
</body>
</html>
<?php
    session_start();
    /*if(isset($_SESSION['usertype'])){
        if($_SESSION['usertype']== 'Admin'){
            include "navAdmin.php";
        }
        else{
            include "navUser.php";
        }
    }*/
?>