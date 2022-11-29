<?php
$insert = false;
if(isset($_POST['Semester'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
  //  echo "Success connecting to the db";

    // Collect post variables
      $Roll_no = $_POST['Roll_no'];
    $Semester = $_POST['Semester'];
      $Marks_Obtained = $_POST['Marks_Obtained'];
        $Total_Marks = $_POST['Total_Marks'];
    $sql = "INSERT INTO `ums`.`marks` (`Roll_no`, `Semester`, `Marks Obtained`, `Total Marks`)
    VALUES ('$Roll_no', '$Semester', '$Marks_Obtained', '$Total_Marks');";
    //echo $sql;

    // Execute the query
    if($con->query($sql) == true)
    {
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter_Marks</title>
    <link rel="stylesheet" href="Styless.css">
</head>
<body>
  <h1><center>
    ENTER MARKS
  </center></h1>
    <form action="marks.php" method="post">
      <input type="number" name="Roll_no" id="Roll_no" placeholder="Enter Roll_no">
      <input type="number" name="Semester" id="Semester" placeholder="Enter Semester">
      <input type="number" name="Marks_Obtained" id="Marks_Obtained" placeholder="Enter Marks_Obtained">
        <input type="number" name="Total_Marks" id="Total_Marks" placeholder="Enter Total_Marks">


        <!--<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea> -->
      <!---  <input type="checkbox" name="Gender" id="gender"> --->
        <button class="btn">Submit</button>
    </form>
     <a href="admin.php">  <button type="button" name="button">GoBack</button></a>


<script src="index.js"></script>

</body>
</html>
