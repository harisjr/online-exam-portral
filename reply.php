<?php 
session_start();
include 'topic_function.php';
include 'function.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="rnp.png"/>
	<title>posts-reply</title>
</head>
<style type="text/css">
	button{
		margin-bottom: 20px;
		background-color: #2e7dba;
		border: 1px solid #2e7dba;
		color: #e3e3e3;
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
	textarea{
		border: 1px solid #585b60;
		overflow: hidden;
		border-radius: 5px;
	}
	.jim{
  width: 40px;
  height: 20px;
  font-size: 13px;
  display: inline;
  border: 1px solid #357fb7;
  background-color: #357fb7;
  color: #e3e3e3; position: relative;
  top: -10px;
   
  
}
.jim:hover{
  background-color:#2a6c9e;
  color: #e3e3e3;
  border: 1px solid #2a6c9e;
  box-shadow: 0px 1px 2px black;
  
}
#cap img{
	width: 25px;
	height: 25px;
}
#cap {
  background-color: #c9d8d8;
  padding-left: 10px;
  box-shadow: 0px 0px 1px black;
}
.usod{
	font-size: 13px;
	font-family: sans-serif;

}
#cap h6{
	font-size: 12px;
}


</style>
<body>
<div class="dig" style="overflow: hidden;">
	<?php
	
	include("template/profile_template.php");
	
	?>
</div>
<br/><br/><br/>
    
<div id="posts" style="width: 1000px; padding: 40px; padding-left: 100px; left: 200px; line-height: 20px; background-color: #b1c3c6; border: 1px solid #dbcebc; text-align: justify; overflow: hidden;">
				<h3 style="font-family: sans-serif;"><i class="fa fa-reply" aria-hidden="true"></i> Reply to posts</h3><hr/>
		<?php	
	
		   if(isset($_GET['post_id'])){
		   	$get_id = $_GET['post_id'];
			$get_post ="select * from posts where post_id='$get_id'";

			$run_post = mysqli_query($connection,$get_post);

			$row_post=mysqli_fetch_array($run_post);

				$post_id = $row_post['post_id'];
				$user_id = $row_post['user_id'];
				$post_title = $row_post['post_title'];
				$post_content = $row_post['post_content'];
				$post_date = $row_post['post_date'];

				//getting the user who has posted the thread.

				$user = "select * from register where user_id='$user_id' AND posts='yes'";
				$run_user=mysqli_query($connection,$user);
				$row_user=mysqli_fetch_array($run_user);
				$user_name = $row_user['user_name'];
				$user_img = $row_user['user_img'];

				
				// getting user session who has replied in the post
				$email_com = $_SESSION['user_email'];
				$get_com = "select * from register where user_email='$email_com'";
				$run_com = mysqli_query($connection,$get_com);
				$row_com=mysqli_fetch_array($run_com);

				$user_com_id = $row_com['user_id'];
                $user_com_name = $row_com['user_name'];
				$user_com_img = $row_com['user_img'];

				//now displaying all at once
				echo "<div id='posts'>
				<p><img src='user/user_images/$user_img' width='50px' height='50px'></p>

				<h5><a href='user_profile.php?u_id=$user_id'><span class=\"uso\">$user_name</span></a></h5>
				<h4>$post_title</h4>
				<h6>$post_content</h6>
				<p>$post_date</p>
				
				</div>";
				// getting the reply of a comments
				$get_id = $_GET['post_id'];
                $get_com = "select * from comments where post_id='$get_id' ORDER by 1 DESC";
                $run_com = mysqli_query($connection,$get_com);
                 while($row=mysqli_fetch_array($run_com)) {

	        $com =$row['comment'];
	        $user_id = $row['user_id'];
	        $date = $row['date'];
	        $user = "select * from register where user_id='$user_id'";
				$run_user=mysqli_query($connection,$user);
				$row_user=mysqli_fetch_array($run_user);
				$user_com_name = $row_user['user_name'];
				$user_com_img = $row_user['user_img'];

	       echo "<div id='cap'><hr/>
	       <p><span class=\"usol\"><img src='user/user_images/$user_com_img' width='25px' height='25px'></span</p>
	       <h5><a href='user_profile.php?u_id=$user_id'><span class=\"usoz\">$user_com_name</span></a></h5> 
	       <span class=\"usod\">$com</span>
	       <p>$date<p>
            </div>
            ";
}
				echo "<hr/><form action='' method='post'>
				<textarea rows='5' cols='130' placeholder='reply to this' name='comment' required='required'></textarea>
				<input type='submit' name='reply' value='send' class='jim'>
				</form><hr/>
				";
				// who has replied
	        

				if(isset($_POST['reply'])){
					
            $comment = $_POST['comment'];
			$insert = "insert into comments (post_id,user_id,comment,date) values ('$post_id', '$user_com_id', '$comment', NOW())";

			$run = mysqli_query($connection,$insert);
			 exit;
			
			//echo "<script>window.open('reply.php', '_self')</script>";

		}
	}

		

				
			?>

				</div>
</body>
</html>
	

