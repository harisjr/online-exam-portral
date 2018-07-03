<?php 
session_start();
include '../function.php';
if(!isset($_SESSION['admin_email'])){
	header("location: admin_login.php");
}
else{
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="logn.png"/>
	<title>Admin panel</title>
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="admin_style.css">
	<style type="text/css">
		h2 a{
			text-decoration: none;
		}
		h2 a{
	      font-family: sans-serif;
	       color: #494949;
	   position:fixed;left: 50px;
}
h2 a:hover{
	text-shadow: 0px 0px 1px black;
	}
	h5 a{
		position: fixed;left: 1300px; top: 20px;
		font-family: sans-serif; font-size: 15px;
		text-decoration: none;
		color:#494949; 
	}
	h4 a{
		position: fixed; left: 1200px; top: 20px;
		font-family: sans-serif; font-size: 15px;
		text-decoration: none;
		color:#494949; 
	}
	.upper{
	border: 1px solid #7caaad;
	width: 1523px; height: 50px;
	background-color: #7caaad;
	position: relative;
	left:-20px; top: -20px;
}
	</style>
</head>
<body style="background-color: #e3e3e3;
	padding-bottom: 10%;">
	
	<div class="upper">
		<h2 style="position:fixed; overflow: hidden; top: 0; left:0; right: 0"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Administration</a></h2>
		<h5><a href="admin_logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Admin Logout</a></h5>
		<h4 style="left: 1200px"><a href="admin_setting.php"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></h4>
		</div>
		
	<div class="side_right" style="height: 400px; width: 250px;">
		<h3>Manage content</h3>
		<ul id="riot" style="display: inline; float: left; list-style: none;">
			<li class="lip"><a href="index.php?view_users"><i class="fa fa-users" aria-hidden="true"></i> View Users</a></li>
			<li class="lip"><a href="index.php?view_post"><i class="fa fa-paper-plane" aria-hidden="true"></i> View Posts</a></li>
			<li class="lip"><a href="index.php?view_topics"><i class="fa fa-eye-slash" aria-hidden="true"></i> View Topics Question</a></li>
			<li class="lip"><a href="index.php?add_topic"><i class="fa fa-plus" aria-hidden="true"></i> Add New topics</a></li>
			<li class="lip"><a href="index.php?add_ques"><i class="fa fa-question" aria-hidden="true"></i> Add questions</a></li>
			<li class="lip"><a href="index.php?view_feeds"><i class="fa fa-street-view" aria-hidden="true"></i> view feedbacks</a></li>
			
		</ul>
	</div>
	<div class="mid">
		<?php
		if(isset($_GET['view_users'])){
			include ("view_users.php");
		}
		if(isset($_GET['view_post'])){
			include ("view_post.php");
		
		}
		if(isset($_GET['add_topic'])){
			include ("add_topic.php");
		
		}
		if(isset($_GET['add_ques'])){
			include ("add_ques.php");
		
		}
		if(isset($_GET['view_topics'])){
			include ("view_topics.php");
		
		}
		if(isset($_GET['view_feeds'])){
			include ("view_feeds.php");
		
		}
		?>
	</div>

</body>
</html>
<?php }?>