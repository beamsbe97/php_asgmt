<?php 
    include "db_conn.php";

    $sql="SELECT * FROM bikes WHERE 1=1 AND availability='Yes'";
    $result = mysqli_query($conn, $sql);
    echo "<table border='1'><tr><th>Bike ID</th>
                                <th>Rent Location</th><th>Description</th>
                                <th>Cost per hour</th><th>Availability</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['rent_location']."</td>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['cost_per_hour']."</td>";
        echo "<td>".$row['availability']."</td>";
        echo "</tr>";
    }
    echo "</table>";

?>

