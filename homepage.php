<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome </title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div id="wrapper">
        <center>
            <h1>Home Page</h1>
            <h3>Welcome
            <?php
				echo $_SESSION['name'];
            ?>
             </h3>
            <img src="imgs/abc.jpg" class="abc" alt="image" />
        </center>
		<?php
			$username = $_SESSION['username'];
			$query = "select * from user where username ='$username'";
			$query_run = mysqli_query($con,$query);
			$row = mysqli_fetch_assoc($query_run);
			echo "<center>";
			echo "<h3>Your Personal details</h3>";
			echo '<table id="tabb">';
				echo "<tr>";
					echo "<td>ID</td><td>:</td><td>".$row['id']."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Name</td><td>:</td><td>".$row['fname']."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Username</td><td>:</td><td>".$row['username']."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Gender</td><td>:</td><td>".$row['gender']."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Hobby</td><td>:</td><td>".$row['hobby']."</td>";		
				echo "</tr>";
			echo "</table>";
			echo "</center>";
		?>
        <form  action="homepage.php" method="post" class="myform">
            <input name="logout" type="submit" id="logout" value="Log Out"/><br>
        </form> 
        <?php
        	
        ?>
        <?php
			if(isset($_POST['logout']))
			{
				session_destroy();
				header('location:index.php');
			}
        ?>       
    </div>
</body>
</html>

