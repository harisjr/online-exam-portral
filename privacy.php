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
	<title>Privacy</title>
</head>
<style type="text/css">
	.dop{
		position:fixed;
		top: 250px; left: 500px;
		border: 1px solid #458396;
		background-color: #458396;
		width: 400px; height: 300px;
		padding-left: 50px;
		margin-left: 20px;
		box-shadow: 0px 0px 2px black;
	}
	body{
		overflow: hidden;
	}
	label{
		font-family: sans-serif;
		font-size: 16px;
	}
	.lom{
  margin: 0;
  width: 60px;
  height: 30px;
  font-size: 16px;
  border-radius: 5px;
  display: inline;
  border: 1px solid #d63333;
  background-color: #d63333;
  color: #e3e3e3;
  position: relative;left: 200px;
  
}
.lom:hover{
  background-color:#d63333;
  color: #e3e3e3;
  border: 1px solid #d63333;
  box-shadow: 0px 1px 3px black;
  
}

</style>
<body>
	<h2>Privacy settings</h2>
	<div class="dop">
		<form action="" method="post" enctype="multipart/form-data">
			<h3>Privacy settings</h3>
			<label>Who can see your posts?</label>
			<select name="ant1" style="width: 300px; height: 30px;">
				<option value="Everyone">Everyone</option>
				<option value="Only Me">Only Me</option>
				</select><br/><br/>
				<label>Who can see your Mobile number?</label>
				<select name="ant2" style="width: 300px; height: 30px;">
				<option value="Everyone">Everyone</option>
				<option value="Only Me">Only Me</option>
				</select><br/><br/>
				<label>Who can see your subjects?</label>
				<select name="ant2" style="width: 300px; height: 30px;">
				<option value="Everyone">Everyone</option>
				<option value="Only Me">Only Me</option>
				</select><br/><br/>
				<input type="submit" name="gtx" value="Submit" class="lom">
		</form>
	</div>

</body>
</html>
<?php } ?>