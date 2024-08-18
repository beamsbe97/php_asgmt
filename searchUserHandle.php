<?php
    include "db_conn.php";
    include "header.php";
    require_once "viewQueries.php";

    $sql = "SELECT * FROM users WHERE 1=1";
 
    $searchFields = array("id"=>(isset($_POST['id'])? $_POST['id'] : null),
                        'firstname'=>(isset($_POST['firstname'])? $_POST['firstname'] : null ),
                        'lastname'=>(isset($_POST['lastname'])? $_POST['lastname'] : null),
                        'username'=>(isset($_POST['username'])? $_POST['username'] : null),
                        'usertype'=>(isset($_POST['usertype'])? $_POST['usertype'] : null),
                        'phone'=>(isset($_POST['phone'])? $_POST['phone'] : null),
                        'email'=>(isset($_POST['email'])? $_POST['email'] : null));
 
    foreach($searchFields as $field => $value){
        if(!empty($value)){
            $sql .= " AND {$field}='{$value}'";
        }
    }
    
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) >= 1){
        viewUsers($result);
    }
    else{
        header("Location: searchUserForm.php?msg=There is no user that fits your criteria");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="searchUserForm.php" method="post">
        <button type="submit">Search Again</button>
    </form>

</body>
</html>