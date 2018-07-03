<?php 
include("../function.php");
?>
<body style="background-color: #e3e3e3;">
	<div class="chip" style="position: fixed;left: 500px; top: 200px; border: 1px solid black; padding: 20px; background-color: #823825;">
		<form action="" method="post">
			<label style="color: #e3e3e3; font-family: sans-serif;">ADD new topic</label><br/><br/>
			<input type="text" name="top" placeholder="ADD TOPIC" size="40" required="required" style="height: 25px; border-radius: 5px; border:1px solid black;"><br/><br/>
			<input type="submit" name="goto" value="INSERT" style="color:#e3e3e3; background-color: #22755f; border-radius: 10px; border:1px solid #22755f; box-shadow: 0px 0px 2px black; ">
		</form>
	</div>
	</body>
	<?php
	if(isset($_POST['goto'])){
				$top = $_POST['top'];

				$insert = "insert into topics (topic_title) values ('$top')";

				$run = mysqli_query($connection,$insert);
				if($run){
					echo "<span class=\"deta\"><h3>Posted to Topics table in database</h3></span>";
					exit();

				}
			}?>


