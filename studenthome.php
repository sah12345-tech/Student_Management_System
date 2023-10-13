<?php

session_start();

    if (!isset($_SESSION['username']))
    {
    	header("location:login.php");
    }

    elseif ($_SESSION['usertype']=='admin')
    {
    	header("location:login.php");
    }

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Dashboard</title>
  <?php
  include 'student_css.php'

  ?>
</head>
<body>

  <?php
  include 'student_sidebar.php'

  ?>
 
  <!-- <header class="header">
      <a href="">Student Dashboard </a>

      <div class="logout">
          <a class="btn btn-primary" href="logout.php">Logout</a>
      </div>
  </header>

  <aside>
      <ul>
          <li>
              <a href="">My Profile</a>
          </li>
          <li>
              <a href="">My Courses</a>
          </li>
          <li>
              <a href="">My Result</a>
          </li>
          
      </ul>
  </aside> -->

  <div class="content">

  </div>
  
</body>
</html>