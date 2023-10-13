
<?php

error_reporting(0);
session_start();
session_destroy();

if ($_SESSION['message'])
{
	$message=$_SESSION['message'];

	echo "<script type ='text/javascript'>

	alert('$message');

	</script>";

}

	$host="localhost";
	$user="root";
	$password="";
	$db="studentproject";

	$data=mysqli_connect($host,$user,$password,$db);

	$sql="SELECT * FROM teacher";

	$result=mysqli_query($data,$sql);


?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</head>
<body>

	<nav>
		<label class="logo">
			<img src="abc_logo.png" alt="ABC Company"/> ABC Company
		</label>

		<ul>
			<li><a href="">Home<a/></li>
			<li><a href="">Contact<a/></li>
			<li><a href="">Admission<a/></li>
			<li><a href="login.php" class="btn btn-success">Login<a/></li>	
		</ul>
	</nav>
	<div class="section1">
		
		<label class="img_text">Welcome To Tutor & Student Panel</label>
		<img class="main_img" src="school_management.jpg">
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="welcome_img" src="school2.jpg">
			</div>
			<div class="col-md-8">
				<h1>Welcome To ABC Company</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. </p> 
				
			</div>
		
	</div>
	<center>
		<h1>Our Tutor and its Details</h1>
	</center>
	<div class="container">
		<div class="row">
            <?php
			while($info=$result->fetch_assoc())
			{

			
			?>

			<div class="col-md-4">
				<img class="teacher" src="<?php echo "{$info['image']}" ?> ">
                <h3><?php echo "{$info['name']}" ?> </h3>

                <h5><?php echo "{$info['description']}" ?></h5>				
			</div>
			<?php
		    }
		    ?>

			
		</div>
	</div>


		<center>
		        <h1>Our Courses</h1>
	    </center>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="teacher1" src="web.jpg">
				<h3>Web Development</h3>
				
				
			</div>
			<div class="col-md-4">
				<img class="teacher1" src="graphic.jpg">
				<h3>Graphics Design</h3>

			</div>
			<div class="col-md-4">
				<img class="teacher1" src="marketing.png">
				<h3>Marketing</h3>

				
			</div>
			
		</div>

		<center>
			<h1 class="adm">Admission Form</h1>
		</center>

		<div align="center" class="admission_form">
			<form action="data_check.php" method="POST"> 
				<div class="adm_int">
					<label class="label_text">Name</label>
					<input class="input_deg" type="text" name="name">
				</div>

				<div class="adm_int">
					<label class="label_text">E-mail</label>
					<input class="input_deg" type="text" name="email">
				</div>

				<div class="adm_int">
					<label class="label_text">Phone</label>
					<input class="input_deg" type="text" name="phone">
				</div>

				<div class="adm_int">
					<label class="label_text">Messages</label>
					<textarea class="input_txt" name="message"></textarea>
				</div>

				<div class="adm_int">
					
					<input class="btn btn-primary" id="submit" type="Submit" value="Apply" name="apply">
				</div>

			</form>
			
		</div>

		<footer>
			<h3 class="footer_text">All @copyright reserved by Ankiee TheHancy </h3> 
		</footer>


</body>
</html>