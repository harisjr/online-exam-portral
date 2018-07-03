<?php
session_start();
include 'function.php';
include 'topic_function.php';
include("template/profile_templates.php");
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
		}
		.app a:hover{
			color: white;
		}
		.details {
		position: fixed;
		left: 40px; top: 300px;
		font-family: sans-serif;
		font-size: 12px;
		display: block;
		font-weight: lighter;

	}
	.detail{
		color: #e3e3e3;
	}
		.detailn{
		color: #e3e3e3;
		position: fixed; top: 280px;
		left: 110px;
		font-size: 15px;
	}
	.detaila
	{
		color: #3e4042;
		position: fixed; top: 640px;
		left: 50px;
		font-size: 14px;
		font-family: sans-serif;
	}
	.imo img{
	position: fixed;
	left: 60px; top: 100px;
	border-radius: 50%;
	border:3px solid #4d4e4f;
	box-shadow: 0px 0px 6px;


	}
	table{
		float: inherit;
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
				$posts = mysqli_num_rows($run_posts);?>



				<?php echo "
				<p><span class=\"imo\"><img src='user/user_images/$user_img' width='160px' height='160px' border-radius='50px' position='relative' left='10px'/></span></p>
				<span class=\"details\"><p><span class=\"detailn\">$user_name</span></p></span>
				 <span class=\"detaila\"><p><p><strong>Last login:</strong> <span class=\"detail\">$last_login</span></p></span><hr/>";?>
				
				<a href="edit.php"><p style="color: #e3e3e3; font-size: 20px; text-shadow: 0px 0px 1px black; position: fixed; left: 240px; bottom: 400px; font-size: 16px;"><i class="fa fa-pencil" aria-hidden="true"></i> </p></a>

				
					
					<ul class="saa">
				<p class="app"><a href="myposts.php?u_id=$user_id"><i class="fa fa-paper-plane" aria-hidden="true"></i> My posts(<?php echo "$posts";?>)</a></p>
					<!--<p class="app"><a href="message.php"><i class="fa fa-envelope-o" aria-hidden="true"></i> Messages</a></p>-->
					<p class="app"><a href="members.php"><i class="fa fa-users" aria-hidden="true"></i> Members</a></p>
					<p class="app"><a href="setting.php"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></p>
					</ul>
					
				
			</div>
		</div>
		<!--user timeline ends-->
		<!--content timeline starts-->
		<div id="content_timeline" style="position:fixed;left: 330px;top: 40px;overflow: hidden;">
			<form accept="profile.php?id=<?php echo $user_id?>" method="post" id="f">
				<h3 style="font-family:sans-serif;color: #443d39;position: relative;left: 20px;top: 10px;">Whats your question Today? Lets discuss!</h3>
				<input type="text" name="title" placeholder="Write a title" required="" size="78" style="border-radius: 5px; height: 25px; border: 1px solid black; color: #e00030; width: 525px;"><br/><br/>
				<textarea cols="71" rows="7" name="content" placeholder="Write Description..." required="" style="border-radius: 5px;border: 1px solid black; background-color: #f7faff;color: #423c3c; height: 100px; overflow: hidden;"></textarea><br/>
				<select name="topic" style="border-radius: 5px; height:24px; background-color: #458396;color: #e3e3e3; border: 0px solid #458396;">
					<option>Select topic</option>
					<?php getTopics();?>
				</select>
				<input type="submit" name="sub" value="Post" style="border-radius: 5px; height: 24px;background-color:#368ec9; color: #e3e3e3; border: 0px solid #458396; ">
			</form>
			<?php
			 insertPost();?>
			
			</div>
			
			



			
		<!--content timeline ends-->
	</div>
	<!--content area ends-->
	
	
				
		
</body>
</html>
<?php }?>
