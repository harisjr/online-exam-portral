<table align="center" width="750px" border="1" bgcolor="#b8ced3" style="position: absolute;top:-300px; left: 300px; overflow-y: scroll;">
	<tr><th>NO.</th>
		<th>User ID</th>
		<th>Name</th>
		<th>City</th>
		<th>State</th>
		<th>Gender</th>
		<th>Image</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Member since</th>
		<th>User status</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php include("../function.php");
	
	$sel_users = "select * from register ORDER BY 1 DESC";
	$run_users = mysqli_query($connection,$sel_users);
	$i=0;
	while($row_users = mysqli_fetch_array($run_users)){
		$user_id = $row_users['user_id'];
		$user_name = $row_users['user_name'];
		$user_city = $row_users['user_city'];
        $user_state = $row_users['user_state'];
		$user_gender = $row_users['user_gender'];
		$user_img = $row_users['user_img'];
		$user_email = $row_users['user_email'];
		$user_mobile = $row_users['user_mobile'];
		$reg_date = $row_users['reg_date'];
		$active = $row_users['active'];
		$i++;

?>
		<tr>
		<td><?php echo "$i";?></td>
		<td><?php echo "$user_id";?></td>
		<td><?php echo "$user_name";?></td>
		<td><?php echo "$user_city";?></td>
		<td><?php echo "$user_state";?></td>
		<td><?php echo "$user_gender";?></td>
		<td><img src="../user/user_images/<?php echo $user_img;?>" width='50' height='50'/></td>
		<td><?php echo "$user_email";?></td>
		<td><?php echo "$user_mobile";?></td>
		<td><?php echo "$reg_date";?></td>
		<td><?php echo "$active";?></td>
		<td><a href="edit_users.php?edit=<?php echo $user_id;?>">Edit</a></td>
		<td><a href="delete_user.php?delete=<?php echo($user_id);?>">Delete</a></td>
		</tr>
			
			<?php } ?>
	




</table>
