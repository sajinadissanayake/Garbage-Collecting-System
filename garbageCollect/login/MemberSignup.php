<?php 
session_start();

	include("connection.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email']; 
		$usertype = "Member";       
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password))
		{

			
			
			$query = "insert into user (firstname,lastname,email,usertype,username,password)
			values ('$firstname','$lastname','$email','$usertype','$username','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;

			echo '<script>';
            echo  "alert('Signup Successfully')";
            echo '</script>';
		}
		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>GTF Member Signup</title>
	<link rel="stylesheet" href="signup3.css">
</head>
<body>


	<div class="area" id="area">
		
        <h1>GTF Member Sign Up</h1>

		<form method="post">
            
		    <div class="detail">
			<input id="text" type="text" name="firstname">
            <label>First Name</label>
            </div>

			<div class="detail">
			<input id="text" type="text" name="lastname">
			<label >Last Name</label>
            </div>

			<div class="detail">
		    <input id="text" type="text" name="email">
			<label>Email</label>
            </div>

			<div class="detail">
			<input id="text" type="text" name="username" >
			<label>NIC Number</label>
            </div>

			<div class="detail">
			<input id="text" type="password" name="password" minlength="6" maxlength="12">
			<label>Password (Enter password between 6-12 Characters)</label>
            </div>
            
			<div class="signup">
			<input id="button" type="submit" value="Signup">
			</div>

		</form>
	</div>

	<script src="script.js"></script>
</body>
</html>