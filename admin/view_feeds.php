<!DOCTYPE html>
<html>
<head>
	<title>View feedbacks</title>
</head>
<body >
<div class="saz" style="padding-bottom: 20%;">
	<h2 style="font-family: sans-serif; position:relative; bottom:350px;left: 400px; color: #414244;">Clients Comments page</h2>
<table align="center" width="750px" border="1" bgcolor="#b8ced3" style="position: absolute;top:-300px; left: 300px;overflow-y: scroll;">
	<tr><th>S.NO.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Number</th>
		<th>Comments</th>
		<th>DATE</th>
		
	</tr>
	<?php include("../function.php");
	
	$sel_posts = "select * from feedbacks ORDER BY 1 DESC";
	$run_posts = mysqli_query($connection,$sel_posts);
	$i=0;
	while($row_posts = mysqli_fetch_array($run_posts)){
		$feed_id = $row_posts['feed_id'];
		$feed_name = $row_posts['feed_name'];
		$feed_email = $row_posts['feed_email'];
		$feed_number = $row_posts['feed_number'];
		$feed_comments = $row_posts['feed_comments'];
		$feed_date = $row_posts['feed_date'];
		$i++;


?>
		<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $feed_name;?></td>
		<td><?php echo $feed_email;?></td>
		<td><?php echo $feed_number;?></td>
		<td><?php echo $feed_comments;?></td>
		<td><?php echo $feed_date;?></td>
		
		</tr>
			
			<?php } ?>

	




</table> 
</div>
</body>
</html>