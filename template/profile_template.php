<?php
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
	<title>Profile</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
	<div class="top" style="height: 60px; border-bottom: 1px solid black;overflow: hidden;position:fixed;top: 0;left: 0; right: 0">
		
	
		<div id="head_wrap" style="position:absolute;top: 0;font-family: sans-serif; color:red;left:0;right: 0;overflow: hidden;">
			
			
			<div id="header">
				<a href="profile.php"><div class="small">
				
				<?php
				$email = $_SESSION['user_email'];
				$get_users = "select * from register where user_email='$email'";
				$run_users = mysqli_query($connection,$get_users);
				$row=mysqli_fetch_array($run_users);
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
				$user_img = $row['user_img'];

				
				echo "<p><span class=\"detaild\"><img src='user/user_images/$user_img' width='40px' height='40px' border-radius='50px' position='fixed' left='600px'/></span></p>
				<span class=\"detai\"><span class=\"detai\">$user_name</span>";
				?>
					
				</div></a>

				
			</div>

		<ul id="menu" style="position:absolute;left: 500px;top: 5px;color: #e3e3e3; overflow: all;">
            <!--<li><a href="profile.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>-->
			<li><a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
			<li><a href="posts.php"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Walls</a></li>
			<li><a href="Subjects.php"><i class="fa fa-book" aria-hidden="true"></i> Subjects</a></li>
			<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>

		</ul>
		<form method="get" action="results.php" id="form1" style="position:absolute;top: 23px;left: 10px; border-radius: 10%;">
			<input type="text" name="user_query" placeholder=" Search for people" style="height: 22px;border-radius: 10px; border:1px solid black; overflow: hidden; width: 260px; box-shadow: 0px 0px 1px black;">
			<input type="submit" name="search" class="bun" value="Go" style="width: 30px;background-color:#056baf; border:0px solid #5b5b5a; color:#e3e3e3; border-radius: 5px; height: 25px;">
		</form>
			</div>
			
		</div>
	</div>
	<?php }?>