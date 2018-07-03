
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
	<div class="content" style="position:fixed; top:200px; bottom:200px; left:0px; right:0px; overflow:auto;">
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
				<p><strong>Last login:</strong> <span class=\"detail\">$last_login</span></p>";?>
			</div>
		</div>
		<!--user timeline ends-->
		<!--content timeline starts-->
		<div id="content_timeline">
		
		<?php single_post();?>
			</div>



			
		<!--content timeline ends-->
	</div>
	<!--content area ends-->
	
				
		
</body>
</html>
<?php } ?>