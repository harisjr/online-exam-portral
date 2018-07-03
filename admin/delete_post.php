<?php
include("../function.php");
if(isset($_GET['delete'])){

	$get_id = $_GET['delete'];
	$del_posts = "delete from posts where post_id='$post_id' where user_id='$get_id'";
	$run_posts = mysqli_query($connection,$del_posts);
	echo "<script>alert('posts has been deleted!')</script>";
	echo "<script>window.open('index.php?view_users','_self')</script>";
}
?>