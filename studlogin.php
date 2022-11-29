<?php
$connect = mysqli_connect("localhost", "root", "", "ums") or die ("Connection Failed");
if(!empty ($_POST['submit']))
{
  $Roll_no=$_POST['Roll_no'];
  $dob=$_POST['Date_of_Birth'];
  $query= "SELECT * from add_student WHERE Roll_no='$Roll_no' and dob='$dob'";
  $result= mysqli_query($connect,$query);
  $count= mysqli_num_rows($result);
  if($count>0)
  {
    header("location: Student.php");
  }
  else {
    echo "Login with Right Credentials";
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Login</title>
    <link rel="stylesheet" href="Styless.css">
  </head>
  <body>
    <center>
      <div class="container">
      <form method="post">
        Enter Roll_no <input type="text" name="Roll_no" />
        <br>
        Enter Date of Birth <input type="date" name="Date of Birth" />
        <br>
        <input type="submit" class="B12" name="submit" value="LOGIN">
      </form>
    </center>
       </div>
         <a href="index.php">  <button type="button" name="button">GoBack</button></a>
  </body>
</html>
