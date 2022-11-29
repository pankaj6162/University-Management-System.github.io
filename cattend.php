<?php
  include_once 'dbc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $sql="SELECT * FROM attend;";
    $result=mysqli_query($con, $sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck >0)
    {
      while($row=mysqli_fetch_assoc($result))
      {

    echo  "Roll_no =" . $row['Roll_no'] . "<br />";
      echo "Semester = " . $row['Semester'] . "<br />";
        echo "Month = " . $row['Month'] . "<br />";
          echo "Avg_Attendance = " . $row['Avg_Attendance'] . "<br />";
}
}
?>
   <a href="Student.php">  <button type="button" name="button">GoBack</button></a>
  </body>
</html>
