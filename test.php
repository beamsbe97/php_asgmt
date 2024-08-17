<?php
$con=mysqli_connect("localhost","root","","mentertraining");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$query = "SELECT `coursedates`.`coursedate_id`,`courses`.`course_title`,`courses`.`no_of_days`,`category`.`category_name`,`coursedates`.`date1` FROM coursedates "
    . " LEFT JOIN `mentertraining`.`courses` ON `coursedates`.`course_id` = `courses`.`course_id` "
    . " LEFT JOIN `mentertraining`.`category` ON `courses`.`category_id` = `category`.`category_id` LIMIT 0, 30 ";

$result = mysqli_query($con,$query);
    echo "<table border='1'><tr><th>Course Title</th><th>Course Date</th></tr>";

while($row    = mysqli_fetch_assoc($result))
  {
  echo "<tr>";
  echo "<td>" . $row['course_title'] . "</td>";
  echo "<td>" . $row['date1'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?> 