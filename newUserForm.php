
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form class="form" action="newUserHandle.php" method="post">
  
        <div class="input-field"><input type="text" name="firstname" placeholder="First name"><br></div>
        <div class="input-field"><input type="text" name="lastname" placeholder="Last name"><br></div>
        <div class="input-field"><input type="text" name="username" placeholder="Username"><br></div>

        <div>
        <label>Type of account:</label>
        <label><input type="radio" name="usertype" value="Admin">Administrator</label>
        <label><input type="radio" name="usertype" value="User">User</label><br>
        </div>
        <div class="input-field"><input type="text" name="phone" placeholder="Phone number"><br></div>
        <div class="input-field"><input type="text" name="email" placeholder="Email"><br></div>
        <button type="submit">Register</button>
    </form>
    </div>
</body>
</html>
<?php
    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }
?>
<form action="index.php" method="post">
    <button type="submit">Back</button>
</form>