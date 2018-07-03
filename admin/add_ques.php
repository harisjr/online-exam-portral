<?php 
include '../function.php';
include '../topic_function.php';
if(!isset($_SESSION['admin_email'])){
	header("location: admin_login.php");
}
else{
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Add question</title>
</head>
<style type="text/css">
 input[type="text"]{
  margin: 0;
  width: 70%;
  height: 35px;
  font-size: 16px;
  border-radius: 5px;
  display: inline;
  border: 1px solid black;
  
}
input[type="submit"]{
  margin: 0;
  width: 50px;
  height: 30px;
  font-size: 16px;
  border-radius: 5px;
  display: inline;
  border: 1px solid #d63333;
  background-color: #d63333;
  color: #e3e3e3;
  position: relative;left: 600px; 
  
}
input[type="submit"]:hover{
  background-color:#d63333;
  color: #e3e3e3;
  border: 1px solid #d63333;
  box-shadow: 0px 1px 3px black;
  
}
::-webkit-input-placeholder { /* Chrome */
  color: #d14b04;
  position: relative;
  left: 10px;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #d14b04;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #d14b04;
  opacity: 1;
}
:-moz-placeholder { /* Firefox 4 - 18 */
  color: #d14b04;
  opacity: 1;
}
textarea{
  margin: 0;
  font-size: 16px;
  border-radius: 5px;
  display: inline;
  border: 1px solid black;
  overflow: hidden;
}
.addd{
	border:1px solid black;
	padding: 20px;
	background-color: #7caec1;
	border-radius: 5px;
	box-shadow: 0px 0px 2px black;
}
</style>
<body>
	<div class="addd" style="position: fixed;left: 500px; top: 100px;">
		
		<form action="" method="post" enctype="multipart/form-data">
			 <select name="topics" required="required" style="width: 200px; height: 30px; border-radius: 5px; border: 1px solid black;"> 
                       <option>Select topic</option>
					<?php getTopics();?>	
                </select><p style="position: fixed;left: 770px; top:110px; font-family: sans-serif;">Select a particular topic & Post question on it</p>
			<br><br>
			<textarea name="ques" cols="80" rows="7" required="" placeholder="Add questions.........."></textarea><br/><br/>
			1.<input type="text" name="ans1" required="" placeholder="choice 1" size="80"><br/><br/>
			2.<input type="text" name="ans2" required="" placeholder="choice 2" size="80"><br/><br/>
			3.<input type="text" name="ans3" required="" placeholder="choice 3" size="80"><br/><br/>
			4.<input type="text" name="ans4" required="" placeholder="choice 4" size="80"><br/><br/>
			<label>Right choice</label><br/><input type="text" name="right_ans" required="" placeholder="right choice" size="80"><br/>
			<input type="submit" name="gone" value="Post">
		</form>
	</div>
	<?php 
	if(isset($_POST['gone'])){
				$topics = $_POST['topics'];
				$ques = addslashes($_POST['ques']); 
				$ans1 = $_POST['ans1'];
				$ans2 = $_POST['ans2'];
				$ans3 = $_POST['ans3'];
				$ans4 = $_POST['ans4'];
				$right_ans = $_POST['right_ans'];
				

				$insert2 = "insert into test (topic_id,ques,ans1,ans2,ans3,ans4,right_ans) values ('$topics', '$ques', '$ans1', '$ans2', '$ans3', '$ans4', '$right_ans')";

				$runnn = mysqli_query($connection,$insert2);
				if($runnn){
					echo "<script>alert('Question inserted properly')</script>";

					/*$update = "update register set posts='yes' where user_id='$user_id'";
					$run_update= mysqli_query($connection,$update);*/
				}
				else{
					echo "<script>alert('Question not inserted properly')</script>";
				}
			}
		
		 ?>

</body>
</html>
<?php } ?>
