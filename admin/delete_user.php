<?php
include("../function.php");
if(isset($_GET['delete'])){

	$get_id = $_GET['delete'];
	$delete = "delete from register where user_id='$get_id'";
	$run_delete = mysqli_query($connection,$delete);
	$del_posts = "delete from posts where user_id='$get_id'";
	$run_posts = mysqli_query($connection,$del_posts);
	echo "<script>alert('User has been deleted!')</script>";
	echo "<script>window.open('index.php?view_users','_self')</script>";
}
?>