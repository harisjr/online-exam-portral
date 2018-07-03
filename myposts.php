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
	<!--contents wrapper starts-->
	<style type="text/css">

		.saa{
			position: fixed;
			top: 420px; left: 100px;
			letter-spacing: 1px;
		}
	   .app a{
			text-decoration: none;
			color: #e3e3e3;
			font-family: sans-serif;
		}
		.app a:hover{
			color: white;
		}
		
	</style>
	<div class="content" style="position:fixed; top:200px; bottom:200px; left:20px; right:0px; overflow:auto;">
		<!--user timeline starts-->
		<div id="user_timeline">
			<div id="user_details">
				<?php
				$email = $_SESSION['user_email'];
				$get_user = "select * from register where user_email='$email'";
				$run_user = mysqli_query($connection,$get_user);
				$row=mysqli_fetch_array($run_user);

				$user_id = $row['user_id'];
                $user_name = $row['user_name'];
				$user_img = $row['user_img'];
				$last_login = $row['last_login'];

				$user_posts = "select * from posts where user_id='$user_id'";
				$run_posts = mysqli_query($connection,$user_posts);
				$posts = mysqli_num_rows($run_posts);



				echo "
				<p><span class=\"imo\"><img src='user/user_images/$user_img' width='180px' height='180px' border-radius='50px' position='relative' left='10px'/></span></p>
				<span class=\"details\"><p><strong>Name:</strong> <span class=\"detail\">$user_name</span></p>
				<p><strong>Last login:</strong> <span class=\"detail\">$last_login</span></p>";?><hr/>
				<a href="edit.php"><p style="color: #e3e3e3; font-size: 20px; text-shadow: 0px 0px 1px black; position: fixed; left: 240px; bottom: 400px; font-size: 16px;"><i class="fa fa-pencil" aria-hidden="true"></i></p></a>
				<ul class="saa">
					
				<p class="app"><a href="myposts.php?u_id=$user_id"><i class="fa fa-paper-plane" aria-hidden="true"></i> My posts(<?php echo "$posts";?>)</a></p>
					<p class="app"><a href="members.php"><i class="fa fa-users" aria-hidden="true"></i> Members</a></p>
					<p class="app"><a href="setting.php"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></p>
				</ul>
			</div>
		</div>
		<div id="content_timeline" style="position:fixed;left: 330px;top: 40px;overflow: hidden;">
			<?php
           if(isset($_GET['u_id'])) {
				$u_id = $_GET['u_id'];
			}
			$get_posts ="select * from posts where user_id='$u_id' ORDER by 1 DESC LIMIT 5";

			$run_posts = mysqli_query($connection,$get_posts);

			while($row_posts=mysqli_fetch_array($run_posts)){

				$post_id = $row_posts['post_id'];
				$user_id = $row_posts['user_id'];
				$post_title = $row_posts['post_title'];
				$post_content = $row_posts['post_content'];
				$post_date = $row_posts['post_date'];

				//getting the user who has posted the thread.

				$user = "select * from register where user_id='$u_id' AND posts='yes'";
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
				
			
				<hr/>
				</div>";

		}
	
	?>
			
			</div>
	



			
		<!--content timeline ends-->
	</div>
	<!--content area ends-->
	
	
				
		
</body>
</html>
<?php }?>

