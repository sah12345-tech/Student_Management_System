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
	<title>Tutor Dashboard</title>
    <link rel="stylesheet" type="text/css" href="tutor.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
 
 <header class="header">
      <a href="">Tutor Dashboard </a>

      <div class="logout">
          <a class="btn btn-primary" href="logout.php">Logout</a>
      </div>
  </header>

  <aside>
      <ul>
          <li>
              <a href="">View Student</a>
          </li>
          <li>
              <a href="">Add Courses</a>
          </li>
          <li>
              <a href="">View Courses</a>
          </li>
          <li>
              <a href="">Mark Results</a>
          </li>
          <li>
              <a href="">View Results</a>
          </li>
      </ul>
  </aside>

  <div class="content">
      <h1>Details of Students, Tutor as well as Courses</h1>

      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

      <input type="text" name="">
  </div>

  
</body>
</html>