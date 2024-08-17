<?php
    echo"There is no bike that fits your search criteria :((";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="searchBikesForm.php" method="post">
        <button type="submit">Search another bike</button>
    </form>
    <form action="home.php" method="post">
        <button type="submit">Home</button>
    </form>
</body>
</html>