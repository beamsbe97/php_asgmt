<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "Beamsbe97";
    $db_name = "gobike";
    $conn="";
    try{
        $conn = mysqli_connect($db_server, 
        $db_user,
        $db_pass,
        $db_name, 3307);

        
    }
    catch(mysqli_sql_exception){
        echo "Connection to database failed";
    }

?>