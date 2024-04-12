<?php 

session_start();

	include("connection.php");
	include("functions.php");


	
       if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$username = $_POST['username'];

		$password = $_POST['password'];


		$sql="select * from user where username='".$username."' AND password='".$password."'  ";

		$result=mysqli_query($con,$sql);

		$row=mysqli_fetch_array($result);



		if($row["usertype"]=="Captain")
		{

			

			$_SESSION['usertype']="captain";

			header("location:../login/incidents/captain.php");
		}

		elseif($row["usertype"]=="Member")
		{	
			

			$_SESSION['usertype']="member";

			header("location:../login/incidents/memberhome.php");
		}

		elseif($row["usertype"]=="Staff")
		{	
			

			$_SESSION['usertype']="staff";

			header("location:../login/incidents/staff.php");
		}

			
		}
		

	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>

	<link rel="stylesheet" href="login.css">

</head>
<body>

<div class="section" id="section">
 
    <h1>Log In</h1>

	<form method="post">

    <div class="details">
    <input id="text" type="text" name="username">
    <label>Username (Use your NIC Number)</label>
    </div>

    <div class="details">
    <input id="text" type="password" name="password"> 
    <label >Enter Password</label> 
    </div>

	<div class="signup">
    <input type="submit" id= "button" value="Login">
	</div>

    <div class="signup">
    Not a GTF Member ? <a href="MemberSignup.php">Click to Signup</a>
    </div>

  </form>

  </div>


</body>
</html>