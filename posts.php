<?php session_start();
include 'function.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="rnp.png"/>
	<title>Walls</title>
</head>
<style type="text/css">
	button{
		margin-bottom: 0px;
		background-color: #2e7dba;
		border: 1px solid #2e7dba;
		color: #e3e3e3;
		margin-left: 820px;
		width: 180px;
		box-shadow: 0px 0px 1px black;


	}
	button:hover{
		background-color: #4378a0;
		transition-delay: 0.4s;
	}
	h6{
		word-spacing: 0px;
		font-weight: lighter;
	}
</style>
<body>
<div class="dig" style="overflow: hidden;">
	<?php
	
	include("template/profile_template.php");
	include 'topic_function.php';
	?>
</div>
<h2 style="font-family: sans-serif;padding-right: auto 50px ; left: 200px;margin: 20px;>
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap">Recent posts and discussion</h2>
    
    <div id="posts" style="width: 1000px; padding: 40px; padding-left: 100px; left: 200px; line-height: 20px; background-color: #b1c3c6; border: 1px solid #dbcebc; text-align: justify; overflow:hidden; box-shadow: 0px 0px 1px black;">
				<h3 style="font-family: sans-serif;">Most recent discussions</h3>
			<?php	
	
		    $per_page=5;

			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}
			else{
				$page=1;
			}
			$start_from = ($page-1) * $per_page;
			$get_posts ="select * from posts ORDER by 1 DESC LIMIT $start_from, $per_page";

			$run_posts = mysqli_query($connection,$get_posts);

			while($row_posts=mysqli_fetch_array($run_posts)){

				$post_id = $row_posts['post_id'];
				$user_id = $row_posts['user_id'];
				$post_title = $row_posts['post_title'];
				$post_content = $row_posts['post_content'];
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
				<h5><a href='user_profile.php?u_id=$user_id'><span class=\"uso\">$user_name</span></a></h5>
				
				<h4>$post_title</h4>
				<h6>$post_content</h6>

				<p>$post_date</p>
				<a href='reply.php?post_id=$post_id style='float:left';'><button>Reply and view comments</button></a>
				

				
			
				<hr/>
				</div>";

		}

				include("pagination.php");
			?>

				</div>
</body>
</html>
	

