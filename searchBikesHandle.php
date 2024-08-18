<?php
    include "db_conn.php";
    include "header.php";
    require_once "viewQueries.php";

    $sql = "SELECT * FROM bikes WHERE 1=1";
 
    $searchFields = array("id"=>(isset($_POST['id'])? $_POST['id'] : null),
                        'rent_location'=>(isset($_POST['rent_location'])? $_POST['rent_location'] : null),
                        'description'=>(isset($_POST['description'])? $_POST['description'] : null),
                        'cost_per_hour'=>(isset($_POST['cost_per_hour'])? $_POST['cost_per_hour'] : null),
                        'availability'=>(isset($_POST['availability'])? $_POST['availability'] : null));
 
    foreach($searchFields as $field => $value){
        if(!empty($value)){
            $sql .= " AND {$field}='{$value}'";
        }
    }
    
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) >= 1){
        viewBikes($result);
    }
    else{
        header("Location: searchBikesForm.php?msg=There is no bike that fits your criteria");
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
    <form action="newRental.php" method="post">
        <label>Enter the Bike ID to rent</label>
        <input type="text" name="bike_id">
        <button type="submit">Confirm</button>
    </form>
    <form action="searchBikesForm.php" method="post">
        <button type="submit">Back</button>
    </form>

</body>
</html>