<?php
    function viewBikes($queryResult){
    echo "<table border='1'><tr><th>Bike ID</th>
                            <th>Rent Location</th><th>Description</th>
                            <th>Cost per hour</th><th>Availability</th></tr>";
    while($row = mysqli_fetch_assoc($queryResult)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['rent_location']."</td>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['cost_per_hour']."</td>";
        echo "<td>".$row['availability']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    }

    function viewUsers($queryResult){
        echo "<table border='1'><tr><th>User ID</th>
                                <th>First name</th><th>Last name</th>
                                <th>Username</th><th>User type</th>
                                <th>Phone Number</th><th>Email</th>
                                </tr>";
    
        while($row = mysqli_fetch_assoc($queryResult)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['firstname']."</td>";
            echo "<td>".$row['lastname']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['usertype']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

?>

