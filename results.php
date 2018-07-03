<?php session_start();
include ("function.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Walls</title>
</head>
<body>
<div class="dig" style="overflow: hidden;">
	<?php
	
	include("template/profile_template.php");
	
	?>
</div>
<h2 style="font-family: sans-serif;position: fixed; left: 500px;">Your Searched results</h2>
    <?php
			//function for searching
			if(isset($_GET['user_query'])){
				$search_term = $_GET['user_query'];
			}
			
			
			$get_users ="select * from register where user_name LIKE '%$search_term%' AND user_city LIKE '%$search_term%' ORDER by 1 DESC LIMIT 5;

			$run_users = mysqli_query($connection,$get_users);
			$count_result = mysqli_num_rows($run_users);
			if($count_result==0){
				echo(sorry);
				exit();

			}


			while($row=mysqli_fetch_array($run_users)){
				$user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $user_city = $row['user_city'];
				$user_img = $row['user_img'];
				

				echo "
				<a href='user_profile.php?u_id=$user_id'>
				<p><span class=\"imon\"><img src='user/user_images/$user_img' width='100px' height='100px' title='$user_name'/></span></p></a>
				<p> <span class=\"detan\"><a href='user_profile.php?u_id=$user_id'>$user_name</a></span></p>
				<p> <span class=\"detan\">$user_city</span></p>";
			}
			

				
			
		?>
				
				
				<hr/>
				</div>";

		
    
</body>
</html>
	