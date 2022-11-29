<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Faculty_Dashboard</title>

  <link rel="stylesheet" href="Styless.css" />
</head>

<body>
  <div class="inline-block1">

    <a href="admin.php">
      <img src="mmm logo_1.png" alt="logo" height="170" width="180">
    </a>
  </div>

  <div class="admin-top">
    <br>
    <h2 class="UMS">&emsp;UNIVERSITY MANAGEMENT SYSTEM</h2>
    <a href="index.php">
      <br>
      <button class="B1" type="button">LOGOUT</button></a>
    <h3>
      <center class="A1">FACULTY DASHBOARD</center>
    </h3>
  </div>
  <div class="admin-left">

    <input class="B12" type="button" onclick="window.location='attend.php'"  value="ATTENDANCE"/>

    <br>
      <input class="B13" type="button" onclick="window.location='marks.php'"  value="EDIT MARKS"/>
    <!---<button class="B13" type="button">EDIT STUDENT MARKS</button> --->
  <br>
  <input class="B16" type="button" onclick="window.location='add.php'"  value="ADD STUDENT"/>
  <!--- <button class="B16" type="button">ADD STUDENT</button>
--->

  </div>

</body>

</html>
