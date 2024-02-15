<?php

session_start();

		include("connection.php");
		include("functions.php");
		
		if($_SERVER['REQUEST_METHOD'] == "POST"){

			

			$name_user = $_POST['name_user'];
			$pass_word = $_POST['pass_word'];
	

			if(!empty($name_user) && !empty($pass_word) && !is_numeric($name_user)){

			
				$query = "select * from users_signup where name_user = '$name_user' limit 1";

				$result = mysqli_query($con, $query);

				if($result && mysqli_num_rows($result)>0){

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['pass_word'] == $pass_word){
						$_SESSION['id_user'] = $user_data['id_user'];
						if($user_data['role'] == "DONOR"){
						header("Location: index1.php");
				    	die;
				    	}
				    	else if($user_data['role'] == "RECEIVER"){
						header("Location: index2.php");
				    	die;
				    	}

					} else{
					echo '<script>alert("Please Enter Valid User Name/Password")</script>';
					}
				} else{
				echo '<script>alert("Please Enter Valid User Name/Password")</script>';
				}
			} 
			else{
				echo '<script>alert("Please Enter Valid User Name/Password")</script>'	;		}

		}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">


	*{
    margin:0;
    paddding:0;
    font_family:sans-serif;
	    
	}

	form{
	    margin-top:100px;
	    text-align:center;
	    
	}
	body{

	    display:flex;
	    align-items:center;
	    flex-direction:column;
	    height:200px;
	    background-size:cover;
	    background-image: url("../user registration/mi-pham-FtZL0r4DZYk-unsplash.jpg");

	    background-attachment: fixed;
	    
	}
	input{
	    display:block;
	    width:350px;
	    height:50px;
	    margin:20px;
	    border:none;
	    outline:none;
	    font-size:20px;
	    border-bottom: 1px solid black;
	    border-top: 1px solid black;
	    font-weight:bold;
	    border-radius: 20px;

    
	}
	a{
		margin-bottom:30px;
	    color:black;
	    font-size: 40px;
	 }


	</style>
		<div id="box">
		
		<form method="post">
			<div style="font-size: 50px;margin: 10px;color: black;"><br>Spreading Joy!</div>
			 <h1>Login</h1>
			<input id="text" type="text" name="name_user" placeholder = "User Name"><br><br>
			<input id="text" type="password" name="pass_word" placeholder = "Password"><br><br>

			<input id="button" type="submit" value="Click to Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>