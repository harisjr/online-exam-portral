<?php 
include '../function.php';
if(!isset($_SESSION['admin_email'])){
	header("location: admin_login.php");
}
else{
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Topics question</title>
</head>
<style type="text/css">
	.star{
		position: relative;
		left: 400px; bottom: 350px;
		font-family:sans-serif;
	}
	li a{
		text-decoration: none;
		list-style: none;
		line-height: 3px;
		color: #414449;
	}
	li a:hover{
		color: #af2708;
		text-decoration: underline;
		transition-delay: 0.2s;
	}
</style>
<body>
	<h2 style="font-family: sans-serif;color: #414244; position: relative;left: 400px; bottom: 350px;">Topics based pages Link to view questions</h2>
	<div class="star">
		<?php 
            $get_topics = "select * from topics";
			$run_topics = mysqli_query($connection,$get_topics);

			while($row=mysqli_fetch_array($run_topics)){
				$topic_id = $row['topic_id'];
				$topic_title = $row['topic_title'];

				echo "<li><a href='../test_page.php?topic=$topic_id'>$topic_title</a></li>";
			}
			?>
	</div>

</body>
</html>
<?php } ?>
