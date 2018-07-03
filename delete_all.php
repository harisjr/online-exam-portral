<?php
include 'function.php';
if(!isset($_SESSION['user_email'])){
header("location:index.php");
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.delt{
		position:fixed;left: 400px;
		top: 200px;
		width: 600px;
		height: 150px;
		border: 1px solid #c6c9ce;
		background-color: #c6c9ce;
		padding: 10px;
	}
	h4{
		font-family: sans-serif;
	}
	.sad{
  margin: 0;
  width: 60px;
  height: 25px;
  font-size: 16px;
  border-radius: 5px;
  display: inline;
  border: 1px solid #d63333;
  background-color: #d63333;
  color: #e3e3e3;
  position: relative;left: 150px;
  
}
.sad:hover{
  background-color:#d63333;
  color: #e3e3e3;
  border: 1px solid #d63333;
  box-shadow: 0px 1px 3px black;
  
}
label{
	font-family: sans-serif;
}

</style>
<body>
	<div class="delt">
		<h4>Deleting your account means it will permanently erase all from everywhere & delete all your profile data, profile posts, messages, test results etc</h4>
		<label>Are you sure, you want to delete it?</label><br/><br/>
		<input type="submit" name="delt_acc" value="Delete" class="sad">	
	</div>
	<?php
if(isset($_GET['delt_acc'])){

	$get_id = $_GET['delt_acc'];
	$delete = "delete from register where user_id='$get_id'";
	$run_delete = mysqli_query($connection,$delete);
	$del_posts = "delete from posts where user_id='$get_id'";
	$run_posts = mysqli_query($connection,$del_posts);
	$del_subjects = "delete from subjects where user_id='$get_id'";
	$run_subjects = mysqli_query($connection,$del_subjects);
	echo "<script>alert('Your Account has been deleted!')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
?>

</body>
</html>
<?php } ?>