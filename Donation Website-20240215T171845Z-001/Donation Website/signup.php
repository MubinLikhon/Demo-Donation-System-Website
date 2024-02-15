<?php


		include("connection.php");
		include("functions.php");
		
		if($_SERVER['REQUEST_METHOD'] == "POST"){

			
			$name_user = $_POST['name_user'];
			$role = $_POST['role'];
			$representing = $_POST['representing'];
			$email = $_POST['email'];
			$mobile_no = $_POST['mobile_no'];
			$pass_word = $_POST['pass_word'];
			$confirm_pass = $_POST['confirm_pass'];

			if(!empty($name_user) && !empty($pass_word)  && !empty($role) && !empty($representing) && !empty($mobile_no)  && !is_numeric($name_user)){
				
				$query = "select * from users_signup where name_user = '$name_user' limit 1";
				$result = mysqli_query($con,$query);
				while(mysqli_num_rows($result) > 0){
					echo '<script>alert("Select a different User Name")</script>';
					die;
				}

				if($pass_word != $confirm_pass){
					echo '<script>alert("Password did not match")</script>';
					die;
				}

				$id_user = random_num(20);
				$query = "select * from users_signup where id_user = '$id_user' limit 1";
				$result = mysqli_query($con,$query);


				while(mysqli_num_rows($result) > 0){
				$id_user = random_num(20);
				$query = "select * from users_signup where id_user = '$id_user' limit 1";
				$result = mysqli_query($con,$query);
				}

				$query = "insert into users_signup (role,id_user,representing,name_user,email,mobile_no,pass_word) values('$role','$id_user','$representing','$name_user','$email', '$mobile_no','$pass_word')";

				mysqli_query($con, $query);
				header("Location: login.php");
				die;

			} else{
				echo "Please Enter all (*) information, note that User Name cannot be numeric eg. 1234";
			}

		}
		
?>

<!DOCTYPE html>

<html>
<head>

	<title>Sign Up</title>
	<link rel="stylesheet" href="style_riad.css">

</head>
<body>

	<style type = "text/css">

		a{
			margin-bottom:30px;
		    color:black;
		    font-size: 40px;
	    }

    </style>


	<div id = "box">
		<form method = "post">
	         
	       <div style="font-size: 40px; margin: 10px; color: black;">Spreading Joy!</div>

	       
	        <input id = "text" type="text" name="role" placeholder = "Your Role*" list="role">
	        <datalist id="role">
	        <option>DONOR</option>
	        <option>RECEIVER</option>
	        </datalist>

	        <input id = "text" type="text" name="representing"  placeholder=" Representing*" list="represent">
	        <datalist id="represent">
	        <option>INDIVIDUAL</option>
	        <option>ORGNISATION</option>
	        </datalist>


	       <input id = "text" type="text" name="name_user" placeholder= "User Name*">
	       <input id = "text" type="email" name="email" placeholder= "Email">
	       <input id = "text" type="text" name="mobile_no" placeholder= "Mobile Number*">
	       <input id = "text" type="password" name="pass_word" placeholder="Password*" >
	       <input id = "text" type="password" name="confirm_pass" placeholder=" Confirm Password*" ><br><br>
	       <input id = "button" type="submit" value = "Sign Up"><br><br>
	       <a href = "login.php">Click to Log in</a>
	        </form>
	    </div>
    </body>
  
</html>