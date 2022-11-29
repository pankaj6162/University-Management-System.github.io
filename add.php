<?php
$insert = false;
if(isset($_POST['name'])){
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
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $Course_Branch = $_POST['Course/Branch'];
    $roll_no = $_POST['Roll_no'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO `ums`.`add_student` (`Name`, `dob`, `Gender`, `Course/Branch`, `Roll_no`, `email`, `phone`, `dt`)
    VALUES ('$name', '$dob', '$gender', '$Course_Branch', '$roll_no', '$email', '$phone', current_timestamp());";
    /*$sql = "INSERT INTO 'ums'.'add_student' ('Name', 'Date of Birth', 'Gender', 'Course/Branch', 'Roll_no', 'email', 'phone', 'dt')
    VALUES ('$Name', '$Date_of_Birth', '$Gender', '$Course_Branch', '$Roll_no', '$email', '$phone', current_timestamp());"; */
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
      <title>Add_Student</title>
      <link rel="stylesheet" href="Styless.css">
  </head>
  <body>
    <h1><center>
      ADD STUDENT
    </center></h1>
    <?php
       if($insert == true){
       echo "Response Submitted";
       }
   ?>
      <form action="add.php" method="post">
          <input type="text" name="name" id="name" placeholder="Enter name">
          <input type="date" name="dob" id="dob" placeholder="Enter Date of Birth">
          <input type="text" name="gender" id="gender" placeholder="Gender">
          <input type="text" name="Course/Branch" id="Course/Branch" placeholder="Enter Course and Branch">
          <input type="number" name="Roll_no" id="Roll_no" placeholder="Enter Roll_number">
          <input type="email" name="email" id="email" placeholder="Enter email" />
          <input type="text" name="phone" id="phone" placeholder="Enter phone">
          <!--<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea> -->
        <!---  <input type="checkbox" name="Gender" id="gender"> --->
          <button class="btn">Submit</button>
      </form>
       <a href="admin.php">  <button type="button" name="button">GoBack</button></a>


  <script src="index.js"></script>

  </body>
  </html>
