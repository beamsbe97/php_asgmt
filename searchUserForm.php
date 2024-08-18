<?php
    include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form class="form" action="searchUserHandle.php" method="post">
        <div class="input-field"><input type="text" name="id" placeholder="User ID"><br></div>
        <div class="input-field"><input type="text" name="firstname" placeholder="First name"><br></div>
        <div class="input-field"><input type="text" name="lastname" placeholder="Last name"><br></div>
        <div class="input-field"><input type="text" name="username" placeholder="Username"><br></div>

        <div>
        <label>User type:</label>
        <label><input type="radio" name="usertype" value="Admin">Administrator</label>
        <label><input type="radio" name="usertype" value="User">User</label><br>
        </div>
        
        <div class="input-field"><input type="text" name="phone" placeholder="Phone"><br></div>
        <div class="input-field"><input type="text" name="email" placeholder="Email"><br></div>
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
<form action="home.php" method="post">
    <button type="submit">Back</button>
</form>