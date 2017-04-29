<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="wrapper">
		<center>
			<h1>Login Form</h1>
			<img src="imgs/abc.jpg" class="abc" alt="image" />
		</center>
		
		<form action="index.php" method="post" name="login" class="myform">
			<!-- For username  -->
			<b><label for="username">Username: </label></b>	
			<input type="text" name="username" id="username" value="" required placeholder="Enter your username"><br>

			<!-- For Password -->
			<b><label for="password">Password:</label></b>
			<input placeholder="Enter password" type="password" name="password" id="password" value="" required><br>

			<!-- Submit Button -->
			<input type="submit" name="submit" value="SUBMIT" id="submit"><br>

			<!-- Register button -->
			<a href="register.php"><input type="button" name="register" id="register1" value="REGISTER"></a><br>	
		</form>		
		
		<?php
			if(isset($_POST['submit']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];

				$query = "select * from user where username = '$username' and password = '$password'";
				$query_run = mysqli_query($con,$query);
				
				
				$query = "select * from user where username = '$username' and password = '$password'";
				$query_run = mysqli_query($con,$query);
				
				$row = mysqli_fetch_assoc($query_run);
				
				if(mysqli_num_rows($query_run))
				{
					echo "success";
					$_SESSION['name'] = $row['fname'];
					$_SESSION['username'] = $row['username'];
					header('location:homepage.php');
				}
				else
				{
		?>
					<script type="text/javascript">alert("Invalid credentials");</script>
		<?php
				}
			}
		?>		
	</div>
</body>
</html>
