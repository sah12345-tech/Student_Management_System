<?php

session_start();

    if (!isset($_SESSION['username']))
    {
    	header("location:login.php");
    }

    elseif ($_SESSION['usertype']=='student')
    {
    	header("location:login.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>

    <?php

         include 'admin_css.php';

     ?> 
    
</head>
<body>
 
  <?php

   include 'admin_sidebar.php';

   ?>

  <!-- <header class="header">
      <a href="">Admin Dashboard </a>

      <div class="logout">
          <a class="btn btn-primary" href="logout.php">Logout</a>
      </div>
  </header>

  <aside>
      <ul>
          <li>
              <a href="admission.php">Admission</a>
          </li>
          <li>
              <a href="">Add Student</a>
          </li>
          <li>
              <a href="">View Student</a>
          </li>
          <li>
              <a href="">Add Tutor</a>
          </li>
          <li>
              <a href="">View Tutor</a>
          </li>
          <li>
              <a href="">Add Courses</a>
          </li>
          <li>
              <a href="">View Courses</a>
          </li>
      </ul>
  </aside> -->

  <div class="content">
      <h1>Admin Dashboard</h1>


  </div>
  
</body>
</html>