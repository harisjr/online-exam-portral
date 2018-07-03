
<?php
ob_start();
session_start();
if($_SESSION['name']!='haris')
{
	header('location:login.php');
}
?>
<?php 
$name = $_POST['name'];
$college = $_POST['college'];
$qual = $_POST['qual'];
$user_img = $_POST['user_img'];
$about = $_POST['about'];
$state = $_POST['state'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
	<div class="top">
		<ul>
			<li><a href="profile.php">Home</a></li>
			<li><a href="dashboard.php">dashboard</a></li>
			<li><a href="Subjects.php">Subjects</a></li>
			<li><a href="logout.php">Log Out</a></li>
		</ul>
	</div>
	<div class="userpic">
		<img src="user.png" width="120px" height="120" style="position: fixed; top: 70px;" >
	</div>
	<table style="position: relative; left: 400px; top: 100px; padding: : 50px; line-height: 40px;">
		<tr>
			<td>Name:</td>
			<td><?php echo $row['name'];?></td>
		</tr>
		<tr>
			<td>College:</td>
			<td><?php echo $row['college'];?><td>
		</tr>
		<tr>
			<td>Qualification:</td>
			<td><?php echo $row['qual'];?><td>
		</tr>
		<tr>
			<td>Image:</td>
			<td><img src="uploads/<?php echo $row['user_img'];?>" alt="" width="100"><td>
		</tr>
		<tr>
			<td>About yourself:</td>
		<td><?php echo $row['about'];?></td>


		</tr>
		<tr>
			
			<td>State</td><?php echo $row['state'];?></td>
		</tr>
		<p style="position: relative; left:800px;top: 100px; "><a href="edit.php">edit</a></p>
		
	</table>
</body>
</html>

