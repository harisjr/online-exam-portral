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
		<meta charset="utf-8">

		<title>Members page</title>
	</head>
	<style type="text/css">
		#user_detai{
		    position: absolute;
			overflow-y: hidden;
			left: 160px; top: 70px;
			line-height: -0px;
			height: 600px; width: 30%;
			background-color: #b5c6c9;

		

		}
		#user_detai:hover{
			overflow: auto;
		}
		.imon img {
			position: relative;
			left: 140px; 
			border-radius: 2px;
			
			
}
.detan{
	position: relative;
	left: 250px; top: -60px;
	font-family: sans-serif;
	font-size: 12px;
	color: #727272;
}
.detan a{
	text-decoration: none;
	color: #474545;
}
.detan a:hover{
	text-decoration: underline;
}
	</style>
	<body style="min-height: 100%; overflow: hidden;">
		<h3 style="position: fixed;left: 500px; font-family: sans-serif; color: #525860;">Members page</h3>
	
	
	
	
			<div id="user_detai">
				<?php
				
				$get_members = "select * from register";
				$run_members = mysqli_query($connection,$get_members);
				while($row=mysqli_fetch_array($run_members)){

				$user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $user_city = $row['user_city'];
				$user_img = $row['user_img'];
				

				echo "
				<a href='user_profile.php?u_id=$user_id'>
				<p><span class=\"imon\"><img src='user/user_images/$user_img' width='100px' height='100px' title='$user_name'/></span></p></a>
				<p> <span class=\"detan\"><a href='user_profile.php?u_id=$user_id'>$user_name</a></span></p>
				<p> <span class=\"detan\">$user_city</span></p>";
			}
			?>
		</div>
	<hr/>
	</body>
</html>
<?php }?>
