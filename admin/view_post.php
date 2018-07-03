<!DOCTYPE html>
<html>
<head>
	<title>View topics</title>
</head>
<body >
<div class="saz" style="padding-bottom: 20%;">
<table align="center" width="750px" border="1" bgcolor="#b8ced3" style="position: absolute;top:-300px; left: 300px;overflow-y: scroll;">
	<tr><th>S.NO.</th>
		<th>TITLE</th>
		<th>Content</th>
		<th>Name</th>
		<th>DATE</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php include("../function.php");
	
	$sel_posts = "select * from posts ORDER BY 1 DESC";
	$run_posts = mysqli_query($connection,$sel_posts);
	$i=0;
	while($row_posts = mysqli_fetch_array($run_posts)){
		$post_id = $row_posts['post_id'];
		$user_id = $row_posts['user_id'];
		$post_title = $row_posts['post_title'];
		$post_content = $row_posts['post_content'];
		$post_date = $row_posts['post_date'];
		$i++;

		$sel_user = "select * from register where user_id='$user_id'";
		$run_user= mysqli_query($connection,$sel_user);

		while($row_users= mysqli_fetch_array($run_user)){
		$user_name = $row_users['user_name'];
	

?>
		<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $post_title;?></td>
		<td><?php echo $post_content;?></td>
		<td><?php echo $user_name;?></td>
		<td><?php echo $post_date;?></td>
		<td><a href="edit_post.php?edit=<?php echo $user_id;?>">Edit</a></td>
		<td><a href="delete_post.php?delete=<?php echo($user_id);?>">Delete</a></td>
		</tr>
			
			<?php } }?>

	




</table> 
</div>
</body>
</html>