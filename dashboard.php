<?php
session_start();
include 'function.php';
include("template/profile_template.php");
if(!isset($_SESSION['user_email'])){

	header("location:index.php");
}
else{
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="rnp.png"/>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
	
	<div id="user_details"  style="position: relative; left: 400px; width: 600px; box-shadow: 1px 1px 2px black;">
		<h2>Personal Details</h2>
				<?php
				$email = $_SESSION['user_email'];
				$get_user = "select * from register where user_email='$email'";
				$run_user = mysqli_query($connection,$get_user);
				$row=mysqli_fetch_array($run_user);

				$user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $user_city = $row['user_city'];
                $user_state = $row['user_state'];
                $user_gender = $row['user_gender'];
				$user_email = $row['user_email'];
				$user_mobile = $row['user_mobile'];
				$user_img = $row['user_img'];
				$reg_date = $row['reg_date'];
				
				

				echo "
				<p><span class=\"imo\"><img src='user/user_images/$user_img' width='200px' height='200px' border-radius='50px' position='relative' left='10px'/></span></p>
				<span class=\"details\"><p><strong>Name:</strong> <span class=\"detail\">$user_name</span></p>
				<span><p><strong>City:</strong> <span class=\"detail\">$user_city</span></p>
				<span><p><strong>State:</strong> <span class=\"detail\">$user_state</span></p>
				<p><strong>Gender:</strong> <span class=\"detail\">$user_gender</span></p>
				<p><strong>Email:</strong> <span class=\"detail\">$user_email</span></p>
				
				<p><strong>mobile:</strong> <span class=\"detail\">$user_mobile</span></p>
				<p><strong>Member since:</strong><span class=\"detail\"> $reg_date</span></p>";?>
				<a href="edit.php"><p style="color: #e3e3e3; font-size: 20px; text-shadow: 0px 0px 2px black; position: fixed; left: 900px; bottom: 595px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></p></a>
			</div>
	
</body>
</html>
<?php }?>

