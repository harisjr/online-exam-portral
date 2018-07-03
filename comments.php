
<?php
session_start();
include 'function.php';
include 'topic_function.php';
include("template/profile_template.php");

if(!isset($_SESSION['user_email'])){

	header("location:index.php");
}
else{
?>
<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title>Posts</title>
		</head>
		<body style="position: relative; overflow: all;">
			<!--contents wrapper starts-->
	

				<?php
				/*$email = $_SESSION['user_email'];
				$get_user = "select * from register where user_email='$email'";
				$run_user = mysqli_query($connection,$get_user);
				$row=mysqli_fetch_array($run_user);
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
				$user_email = $row['user_email'];
				$user_mobile = $row['user_mobile'];
				$user_img = $row['user_img'];
				$reg_date = $row['reg_date'];
				$last_login = $row['last_login'];

				echo "
				<p><span class=\"imo\"><img src='user/user_images/$user_img' width='150px' height='150px' border-radius='50%' position='relative' left='10px'/></span></p>
				<span class=\"details\"><p><strong>Name:</strong> <span class=\"detail\">$user_name</span></p>
				<p><strong>Email:</strong> <span class=\"detail\">$user_email</span></p>
				<p><strong>mobile:</strong> <span class=\"detail\">$user_mobile</span></p>
				<p><strong>Member since:</strong><span class=\"detail\"> $reg_date</span></p>
				<p><strong>Last login:</strong> <span class=\"detail\">$last_login</span></p>"*/;?>
			</div>
		</div>
		<!--user timeline ends-->
		<!--content timeline starts-->
		<div id="con">
		
		<?php
		if(isset($_GET['post_id'])){
				$get_id = $_GET['post_id'];
				$get_posts ="select * from posts where post_id='$get_id'";

			$run_posts = mysqli_query($connection,$get_posts);
			$row_posts=mysqli_fetch_array($run_posts);
				$post_id = $row_posts['post_id'];
				$user_id = $row_posts['user_id'];
				$post_title = $row_posts['post_title'];
				$content = $row_posts['post_content'];
				$post_date = $row_posts['post_date'];

				//getting the user who has posted the thread.

				$user = "select * from register where user_id='$user_id' AND posts='yes'";
				$run_user=mysqli_query($connection,$user);
				$row_user=mysqli_fetch_array($run_user);
				$user_name = $row_user['user_name'];
				$user_img = $row_user['user_img'];

				//now displaying all at once
				echo "<div id='posts'>
				<p><img src='user/user_images/$user_img' width='50px' height='50px'></p>
				<h5><a href='user_profile.php?user_id=$user_id'><span class=\"uso\">$user_name</span></a></h5>
				
				<h4>$post_title</h4>
				<h6>$content</h6>
				<p>$post_date</p>
				
				
				 
				<hr/>
				</div>";
			}?>
			</div>



			
		<!--content timeline ends-->
	</div>
	<!--content area ends-->
	
				
		

	
		
</body>
</html>
<?php } ?>