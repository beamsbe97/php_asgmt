<?php
    session_start();
    include "db_conn.php";


    $sql = "SELECT * FROM users
            INNER JOIN rental
            ON users.id = rental.user_id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "query successfull";
    }
    echo "<table border='1'><tr><th>User ID</th><th>First name</th>
                                <th>Last name</th><th>User type</th>
                                <th>Phone Number</th><th>Email</th>
                                </tr>";
    
    while($row = mysqli_fetch_assoc($allUserResults)){
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

?>