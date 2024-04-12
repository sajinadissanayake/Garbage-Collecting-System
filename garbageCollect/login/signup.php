<?php 
session_start();

	include("connection.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email']; 
		$usertype = $_POST['usertype'];       
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
	<title> Captains and Collecting Staff </title>
	<link rel="stylesheet" href="signup3.css">
</head>
<body>


	<div class="area" id="area">
		
        <h1>Green Captains and Collecting Staff </h1>

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

<tr><td>Type</td>  
<td><input type="radio" name="usertype" value="Captain"/>Captain</td>  
<tr>  
<td><input type="radio" name="usertype" value="Staff"/>Staff</td></tr> 
</tr>  

			<div class="detail">
			<input id="text" type="text" name="username">
			<label>NIC No</label>
            </div>

			<div class="detail">
			<input id="text" type="password" name="password">
			<label>Password</label>
            </div>
            
			<div class="signup">
			<input id="button" type="submit" value="Signup">
			</div>

		</form>
	</div>

</body>
</html>