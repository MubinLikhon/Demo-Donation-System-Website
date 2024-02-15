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
			background-image: url("../user registration//images/pexels-thgusstavo-santana-2946421.jpg");
		}
		.nav-links ul li a{
		    color: chocolate;
		 	text-decoration: none;
		 	font-size: 18px;
		 }
		.text-box{
			
			color: #fff;
			
		}


    </style>

	<section class="header">
		<nav>
			<a href="index1.php"><img src="../user registration/images/imageedit_1_7395898986.png"></a>
			<div class="nav-links">
					<ul>
					<li><a href="index1.php">HOME  </a></li>
					<li><a href="payment_gateway-2.php">DONATE  </a></li>
					<li><a href="donor_about.php">Your INFO  </a></li>

					<li><a href="logout.php">SIGN OUT</a></li>
				</ul>
			</div>

				</nav>
		<div class="text-box">
			<h1> Welcome <?php echo $user_data['name_user']; ?> !<br>Let's Spread Joy</h1>
			<p>The Prophet (peace be upon him) said “Sadaqah extinguishes<br> sin as water extinguishes fire” (Hadith, Tirmidhi).</p>
			<a href= "payment_gateway.html" class="hero-btn">Make a Donation Now</a>



	</section>
		<section class = "projects"> 
		<h1><a href="table1.php"> Donate to Individuals with Causes </a></h1>
		<h1><br> Running Projects</h1>
		<p> These are the projects that are currently running</p>
		<div class="row">
			<div class="project-col">
				<img src="../user registration/img-11.jpg">
				<h3>Happy Kids( Project ID-A)</h3>
				<p> International Project that is currently on</p>
			</div>
			<div class="project-col">
				<img src="../user registration/img-12.jpg">
				<h3>Ek Takay Ahar(Project ID-B)</h3>
				<p> Bidyanondo Project that is currently on</p>
			</div>
			<div class="project-col">
				<img src="../user registration/img-15.jpg">
				<h3><br> <br>Share The Meal(Project ID-C)</h3>
				<p> International Project that is currently on</p>
			</div>



     

	</section>


</body>

</html>