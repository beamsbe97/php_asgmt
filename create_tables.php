<?php
    include "db_conn.php";

    $sql = "CREATE TABLE RENTAL(
        rental_id INT AUTO_INCREMENT PRIMARY KEY,
        bike_id INT NOT NULL,
        user_id INT NOT NULL,
        start_date DATETIME NOT NULL ,
        end_date DATETIME,
        FOREIGN KEY (bike_id) REFERENCES bikes(id),
        FOREIGN KEY (user_id) REFERENCES users(id)
        )";
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Table created";
    }
    else{
        echo "Create failed";
    }
?>