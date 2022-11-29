<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>University_Management_System</title>
  <link rel="stylesheet" href="Styless.css">
</head>

<body><!-- background="mmmutgate.png"-->
  <div>
    <div id="banner">
      <div class="inline-block1">
        <img src="mmm logo_1.png" height="180" width="180">
      </div>

      <div class="inline-block2">
        <img src="mmm.png" height="200" width="950">
      </div>
    </div>
  </div>
  <hr>
  <br>
  <center>
    <h1>UNIVERSITY MANAGEMENT SYSTEM</h1>
    <input  class="b1" type="button" onclick="window.location='adminlog.php'"  value="ADMIN LOGIN"/>
    <!---<a href="faculty.php">
      <button type="button" class="b1">FACULTY LOGIN</button>
    </a> --->
    <br>

    <input class="b3" type="button" onclick="window.location='studlogin.php'"  value="STUDENT LOGIN"/>
    <!--- <a href="Student.php">
      <button type="button" class="b3">STUDENT LOGIN</button>
    </a> --->

  </center>
  <!--- <div class="contact_info">
    <p> &emsp; Follow us on:</p>
    <p> &emsp;

      <a href="https://www.facebook.com/mmmut.ac.in">
        <img class="fb" src="https://www.freepnglogos.com/uploads/logo-facebook-png/logo-facebook-facebook-logo-transparent-png-pictures-icons-and-0.png" alt="fb logo" width="25" height="25">
      </a>
      <a href="https://twitter.com/MmmutOfficial">
        <img src="https://pngimg.com/uploads/twitter/twitter_PNG3.png" alt="twitter logo" width="25" height="25">
      </a>
      <a href="https://www.linkedin.com/school/madan-mohan-malaviya-university-of-technology/">
        <img src="https://pngimg.com/uploads/linkedIn/linkedIn_PNG38.png" alt="linkedin_logo" width="25" height="25">
      </a>
      <a href="https://www.youtube.com/user/mmmut1">
        <img src="https://www.freeiconspng.com/thumbs/youtube-logo-png/hd-youtube-logo-png-transparent-background-20.png" alt="ytlogo" width="25" height="25">
      </a>
    </p>
  </div> --->

  <div class="card">
  <div class="card-header">
    Contact Us:
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Email: patovc@mmmut.ac.in</p>
      <footer class="blockquote-footer">Phone number: +91-551-2273958, +91-8765783730</footer>
    </blockquote>
  </div>
</div>
  <script src="index.js" charset="utf-8"></script>
</body>

</html>
