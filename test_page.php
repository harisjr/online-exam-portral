<?php 
include 'function.php';
/*if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
else{*/
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test page</title>
</head>
<style type="text/css">
	table {
    width: 100%;
    display:block;
}
thead {
    display: inline-block;
    width: 100%;
    height: 20px;
}
radio {
    display: inline;
}
 input {
    width: auto;
    margin-left: 3em;
    float: left;
    display: inline;
}
detail{
	display: inline;

}
.sag{
	position: relative;
	left: 400px;
	top: 200px;
}
</style>
<body style="background-color: #e3e3e3; overflow: hidden;">
<div class="sag">
	<?php
             if(isset($_GET['topic'])){
				$topic_id = $_GET['topic'];
				$get_topic = "select * from test where topic_id='$topic_id'";
				$run_test= mysqli_query($connection,$get_topic);
				$i=0;
				while($row_tests=mysqli_fetch_array($run_test)){

				$topic_id = $row_tests['topic_id'];
                $ques = $row_tests['ques']; 
				$ans1 = $row_tests['ans1'];
				$ans2 = $row_tests['ans2'];
				$ans3 = $row_tests['ans3'];
				$ans4 = $row_tests['ans4'];
				$right_ans = $row_tests['right_ans'];
				$i++;
			
		
	}
	?>
			 
			 <table align="center" width="750px" border="1" bgcolor="#b8ced3" style="position: absolute;top:-300px; left: 300px;overflow-y: scroll;">
			 	
			 	<tr><?php echo "<p>Q$i.";?><?php echo "<span class=\"details\"><p><span class=\"detail\">$ques</span></p>"; ?>
			 	<form action="" method="post">
			 		<input type="radio" name="ans" value="<?php echo "<p><span class=\"detail\">$ans1</span></p>"; ?> 
			 		<input type="radio" name="ans" value="<?php echo "<p><span class=\"detail\">$ans2</span></p>"; ?> 
			 		<input type="radio" name="ans" value="<?php echo "<p><span class=\"detail\">$ans3</span></p>"; ?> 
			 		<input type="radio" name="ans" value="<?php echo "p><span class=\"detail\">$ans4</span></p>"; ?>
			 	</form>
			 </tr>
			 </table>
			 <?php } ?>
			</div>


</body>
</html>
