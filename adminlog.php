<?php
$connect = mysqli_connect("localhost", "root", "", "ums") or die ("Connection Failed");
if(!empty ($_POST['submit']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $query= "SELECT * from admin WHERE email='$email' and password='$password'";
  $result= mysqli_query($connect,$query);
  $count= mysqli_num_rows($result);
  if($count>0)
  {
    header("location: admin.php");
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
        Enter Email-ID <input type="email" name="email" />
        <br>
        Enter Password <input type="password" name="password" />
        <br>
        <input type="submit" class="B12" name="submit" value="LOGIN">
      </form>
    </center>
       </div>
         <a href="index.php">  <button type="button" name="button">GoBack</button></a>
  </body>
</html>
