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

    $sql="SELECT * FROM marks;";
    $result=mysqli_query($con, $sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck >0)
    {
      while($row=mysqli_fetch_assoc($result))
      {

    echo  "Roll_no =" . $row['Roll_no'] . "<br />";
      echo "Semester = " . $row['Semester'] . "<br />";
        echo "Marks Obtained = " . $row['Marks Obtained'] . "<br />";
          echo "Total Marks = " . $row['Total Marks'] . "<br />";
}
}
?>
<a href="Student.php">  <button type="button" name="button">GoBack</button></a>
  </body>
</html>
