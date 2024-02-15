<?php

session_start();
		
		include("connection.php");
		include("functions.php");
		$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> User Home Page</title>
		<link rel="stylesheet" href="style_new.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,700&display=swap" rel="stylesheet">

		
</head>

<body>
	<style type = "text/css">
		
		.header{
			background-image: url("../user registration/receiver_image.jpg");
		}

    </style>


	<section class="header">
		<nav>
			<a href="index2.php"><img src="../user registration/images/imageedit_1_7395898986.png"></a>
			<div class="nav-links">
					<ul>
					<li><a href="index2.php">HOME  </a></li>
					<li><a href="payment_received.html">APPLY </a></li>
					<li><a href="receiver_about.php">Your INFO  </a></li>

					<li><a href="logout.php">SIGN OUT</a></li>
				</ul>
			</div>

				</nav>
		<div class="text-box">
			<h1> Welcome <?php echo $user_data['name_user']; ?> !<br>You are not alone.</h1>
			<p>We assure you that you are<br> not alone, the world has got your back!</p>
			<a href= "payment_received.html" class="hero-btn">Apply for Donation Now</a>



	</section>

	<section class = "projects"> 
		<h1> Running Projects</h1>
		<p> These are the projects that are currently running</p>
		<div class="row">
			<div class="project-col">
				<img src="../user registration/img-11.jpg">
				<h3>Project1</h3>
				<p> International Project that is currently on</p>
			</div>
			<div class="project-col">
				<img src="../user registration/img-12.jpg">
				<h3>Ek Takay Ahar</h3>
				<p> Bidyanondo Project that is currently on</p>
			</div>
			<div class="project-col">
				<img src="../user registration/img-15.jpg">
				<h3><br> <br>Share The Meal</h3>
				<p> International Project that is currently on</p>
			</div>



     

	</section>


</body>

</html>