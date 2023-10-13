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

    $host="localhost";
    $user="root";
    $password="";
    $db="studentproject";

    $data=mysqli_connect($host,$user,$password,$db);

    $sql="SELECT * FROM user WHERE usertype='student' ";

    $result=mysqli_query($data,$sql);

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

   <style type="text/css">
     
     .table_th
     {
      padding: 20px;
      font-size: 15px;
     }

     .table_td
     {
      padding: 20px;
      background-color: pink;
     }

   </style>

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
    <center>
      <h1>Student Data</h1>

      <?php

      if($_SESSION['message'])
      {
        echo $_SESSION['message'];
      } 

      unset ($_SESSION['message']); 

     ?>


       <br><br>
      <table border="1px">
        <tr>
          <th class="table_th">Username</th>
          <th class="table_th">Email</th>
          <th class="table_th">Phone</th>
          <th class="table_th">Password</th>
          <th class="table_th">Delete</th>
          <th class="table_th">Update</th>
        </tr>
         
         <?php

         while($info=$result->fetch_assoc())

         {

         ?> 

        <tr>
          <td class="table_td">
            <?php echo "{$info['username']}";   ?>
          </td>
          <td class="table_td">
            <?php echo "{$info['email']}";   ?>
          </td>
          <td class="table_td">
            <?php echo "{$info['phone']}";   ?>
          </td>
          <td class="table_td">
            <?php echo "{$info['password']}";   ?>
          </td>

          <td class="table_td">
            <?php 
            echo "<a onClick=\" javascript:return confirm('Are You Sure to Delete this'); \" class='btn btn-danger'  href='delete.php?student_id={$info['id']}'>Delete</a>"; 
            ?>
          </td>
          <td class="table_td">
            <?php echo "<a class='btn btn-primary' href='update_student.php?student_id={$info['id']}'>Update</a>";   ?>
          </td>
        </tr>

        <?php
         }
        ?>
      </table>

</center>
  </div>
  
</body>
</html>