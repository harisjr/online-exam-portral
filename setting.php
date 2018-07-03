<?php
session_start();
include 'function.php';
include 'topic_function.php';
include("template/profile_template.php");
if(!isset($_SESSION['user_email'])){

	header("location:index.php");
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Account Settings</title>
</head>
<style type="text/css">
	.rap{
		border:1px solid #458396;
		background-color: #458396;
		width: 300px; height: 300px;
		position: relative;top: 50px;
	}
	hr{
		position: relative;top: 100px;
	}
	.ad{
		position: relative;top: 100px;
		left: -20px;
		display: inherit;
		line-height: -0px;
		margin: -2px;
	}
</style>
<body>
	<h2 style="position: relative;left: 320px; top: 100px; font-family: sans-serif;color: #424447;">General Account Settings</h2><hr/>
	<div class="rap">
		<ul id="edx">
			<li class="ad"><a href="setting.php?privacy"><i class="fa fa-eye" aria-hidden="true"></i> Privacy</a></li>
			<li class="ad"><a href="setting.php?change_password"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Change password</a></li>
			<li class="ad"><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> General</a></li>
			<li class="ad"><a href="setting.php?delete_all"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete my Account</a></li>
		</ul>
	</div>
	<?php
	if(isset($_GET['change_password'])){
			include ("change_password.php");
		}
		if(isset($_GET['privacy'])){
			include ("privacy.php");
		}
		if(isset($_GET['delete_all'])){
			include ("delete_all.php");
		}
		?>

</body>
</html>
<?php } ?>