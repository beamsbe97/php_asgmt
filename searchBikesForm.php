<?php
    include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form class="form" action="searchBikesHandle.php" method="post">
        <div class="input-field"><input type="text" name="id" placeholder="Bike ID"><br></div>
        <div class="input-field"><input type="text" name="rent_location" placeholder="Rent Location"><br></div>
        <div class="input-field"><input type="text" name="description" placeholder="Description"><br></div>
        <div class="input-field"><input type="text" name="cost_per_hour" placeholder="Cost Per Hour"><br></div>
        <label>Availability:</label>
        <label><input type="radio" name="availability" value="Yes">Yes</label>
        <label><input type="radio" name="availability" value="No">No</label><br>
        <button type="submit">Search</button>

    </form>
</div>   
</body>
</html>
<?php
    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }
?>
<form action="manageBikes.php" method="post">
    <button type="submit">Back</button>
</form>