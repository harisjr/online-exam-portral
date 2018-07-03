
<?php
session_start();
include 'function.php';
include("template/profile_template.php");
	include 'topic_function.php';
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
	<title>Users</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<style type="text/css">
	.details{
		position: fixed;top: 100px;
}

button{
	width: 140px;
	height: 30px;
	font-family: sans-serif;
	
	background-color: #2a966b;
	border:1px solid #2a966b;
	box-shadow: 0px 1px 1px black;
}
button:hover{
	background-color: #2ea576;
	box-shadow: 0px 1px 4px black;
}
.same2{
        position: fixed;
        left: 1100px;
		top: 100px;
		width: 300px;
		height: 500px;
		
	

	}
	h5{
		font-size: 15px;
		font-weight: lighter;
		position: relative;top: 20px; 
	}
	
</style>
<body>
	
	
	<div id="user_details"  style="position: relative; left: 400px; width: 600px; height: 500px; box-shadow: 1px 1px 2px black;">
		
		<?php
             if(isset($_GET['u_id'])){
				$user_id = $_GET['u_id'];
				$get_user = "select * from register where user_id='$user_id'";
				$run_user = mysqli_query($connection,$get_user);
				$row=mysqli_fetch_array($run_user);

				$id = $row['user_id'];
                $user_name = $row['user_name'];
                $user_city = $row['user_city'];
                $user_state = $row['user_state'];
                $user_gender = $row['user_gender'];
				$user_email = $row['user_email'];
				$user_mobile = $row['user_mobile'];
				$user_img = $row['user_img'];
				$reg_date = $row['reg_date'];
				$last_login = $row['last_login'];
			
			if ($user_gender=='Male') {
			 $msg="send him a message";
			}
			else {
			$msg="Send her a message";
			}

				echo "
				<p><span class=\"imo\"><img src='user/user_images/$user_img' width='200px' height='200px' border-radius='50px' position='relative' left='10px'/></span></p>
				<span class=\"details\"><p><strong>Name:</strong> <span class=\"detail\">$user_name</span></p>
				<span><p><strong>City:</strong> <span class=\"detail\">$user_city</span></p>
				<span><p><strong>State:</strong> <span class=\"detail\">$user_state</span></p>
				<p><strong>Gender:</strong> <span class=\"detail\">$user_gender</span></p>
				<p><strong>Email:</strong> <span class=\"detail\">$user_email</span></p>
				
				<p><strong>mobile:</strong> <span class=\"detail\">$user_mobile</span></p>
				<p><strong>Member since:</strong><span class=\"detail\"> $reg_date</span></p>
				<p><strong>Last login:</strong><span class=\"detail\"> $last_login</span></p>

				<a href='messages.php?u_id=$id'><button>$msg</button></a><hr/ >";
			}
			 ?>
			</div>
			<div class="same2">
				<?php new_members();  ?>
			</div>
	
</body>
</html>
<?php }?>

