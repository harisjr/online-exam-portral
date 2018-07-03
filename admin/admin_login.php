<?php
session_start();
include 'function.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>admin login</title>
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
</head>
<body style="background-color: #d3d3d3;">
	<div class="rap" style="position: relative;left: 500px; top: 200px; border:1px solid black; box-shadow: 0px 0px 1px black; width: 400px; height: 200px;padding-left:50px; background-color: #b74949; color: black;">
		<h3 style="font-family: sans-serif; color: #3a3737;">ADMIN LOGIN PAGE</h3>
		<form accept="admin_login.php" method="post">
			<i class="fa fa-user-o" aria-hidden="true"></i> <input type="email" name="email" placeholder="Admin Email" size="40" style="height: 25px; border-radius: 5px; border: 1px solid black;"><br/><br/>
			<i class="fa fa-key" aria-hidden="true"></i> <input type="password" name="password" placeholder="*********" size="40" style="height: 25px;border-radius: 5px; border: 1px solid black;"><br/><br/>
			<input type="submit" name="subbb" value="LOG" style="background-color: #2c7d99; color: #e3e3e3; border: 1px solid #2c7d99; box-shadow: 0px 0px 2px black;">
		</form>
	</div>

</body>
</html>
<?php

     if(isset($_POST['subbb'])){
        $email = mysqli_real_escape_string($connection,$_POST['email']);
	    $password = mysqli_real_escape_string($connection,$_POST['password']);

	    $get_user = "select * from admin_login where admin_email='$email' AND admin_password='$password'";
	    $run_user = mysqli_query($connection,$get_user);
	    $check = mysqli_num_rows($run_user);

	    if ($check==1) {
	    	$_SESSION['admin_email']=$email;
	    	echo "<script>window.open('index.php', '_self')</script>";
	    }
	    else{
	    	echo "<script>alert('email and password are not correct')</script>";
	    }
	}
	?>