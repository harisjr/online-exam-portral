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
	<title>Subjects</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
	<?php include("template/profile_template.php"); ?>
	<div class="board" style="border: 1px solid black; width: 1000px; height: 500px; position: fixed; left: 240px; top: 100px; box-shadow: 1px 1px 1px black; background-color:#458396; border:1px solid #458396;">
		<form action="" method="post" enctype="multipart/form-data">
			<h2 style="position: relative; left: 350px; font-family: sans-serif; color: #e3e3e3; text-shadow: 0px 1px 2px black;">Select your subjects</h2>
			<label style="font-family: monospace; font-weight: bold;position: relative;left: 120px;font-size: 18px; word-spacing: 2px; ">Enter your academic details</label><br/><br/>
			<div class="sect">
				<input type="text" name="college" placeholder="College or Institute name" size="50" required="required" style="position: relative; left: 140px; height: 25px; border-radius: 5px; border: 1px solid black;" ><br/><br/>
				<input type="text" name="qual" placeholder="Qualification or degree" size="50" required="required" style="position: relative; left: 140px; height: 25px; border-radius: 5px; border: 1px solid black;">
				<input type="text" name="profession" placeholder="Profession or current role" size="50" required="required" style="position: relative; left: 140px; height: 25px; border-radius: 5px; border: 1px solid black;">
			</div><br/><hr/>
			<div class="sect1" style="position: relative;left: 90px;font-family: sans-serif;padding: 10px 10px; word-spacing: 16px;">
				<label style="font-family: monospace; font-weight: bold;position: relative;left: 10px;font-size: 18px; word-spacing: 2px; ">Choose your skills</label><br/><br/>
				<input type="checkbox" name="book[]" value="C++">C++
                <input type="checkbox" name="book[]" value="Java">JAVA
                <input type="checkbox" name="book[]" value="python">Python
                <input type="checkbox" name="book[]" value="android">Android
                <input type="checkbox" name="book[]" value="php">PHP
                <input type="checkbox" name="book[]" value="html&css">HTML_&_CSS
			</div><br/><br/><hr/>
			
			<div class="sect2">
				<label style="font-family: monospace; font-weight: bold;position: relative;left: 110px;font-size: 18px; word-spacing: 2px;">Select your test topic</label><br/><br/>
				<select name="u_level" required="required" style="position: relative;left: 110px; width: 160px; height: 30px; color: #e3e3e3; background-color:#3a3d3a; "> 
                       <option>Select topic</option>
					<?php getTopics();?>
                </select>
			</div><br><br>
			<div class="sect3">
			<input type="submit" name="tip" value="DONE" style="width: 200px; height: 50px; font-family: sans-serif;position: relative;left: 500px;background-color: #3a3d3a; color: #e3e3e3;border-radius: 5px;top: 20px; border: 1px solid #3a3d3a; box-shadow: 0px 0px 1px black; font-size: 20px; letter-spacing: 2px; ">
		</div>


		</form>
		<?php sub_post(); ?>
		
	</div>
	</body>


</html>
<?php } ?>