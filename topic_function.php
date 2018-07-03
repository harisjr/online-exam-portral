	<?php
//inserting the topics into the database

function getTopics(){
	global $connection;
$get_topics = "select * from topics";
			$run_topics = mysqli_query($connection,$get_topics);

			while($row=mysqli_fetch_array($run_topics)){
				$topic_id = $row['topic_id'];
				$topic_title = $row['topic_title'];

				echo "<option value='$topic_id'>$topic_title</option>";
			}
		}
		// i have to see the topic_title in future and display on user dashboard

		//insert the post into the database
		function insertPost(){
			if(isset($_POST['sub'])){
				global $connection;
				global $user_id;
				$title = addslashes($_POST['title']); 
				$content = addslashes($_POST['content']);
				$topic = $_POST['topic'];

				$insert = "insert into posts (user_id,topic_id,post_title,post_content,post_date) values ('$user_id','$topic','$title','$content',NOW())";

				$run = mysqli_query($connection,$insert);
				if($run){
					echo "<span class=\"deta\"><h3>Posted to walls</h3></span>";

					$update = "update register set posts='yes' where user_id='$user_id'";
					$run_update= mysqli_query($connection,$update);
				}
			}
		}
		
		 //insert the details into the database
		function sub_post(){

		       if(isset($_POST['tip'])){
                global $connection;
				global $user_id;
				$college = $_POST['college']; 
				$qual = $_POST['qual'];
				$profession = $_POST['profession'];
				$a = $_POST['book'];
				$book = implode(',',$a);
				$u_level = $_POST['u_level'];
				$insert = "insert into subjects (user_id,college,qualification,profession,subjects,level) values ('$user_id', '$college', '$qual', '$profession', '$book', '$u_level')";

				$run = mysqli_query($connection,$insert);
	            /*$insertions = "update register SET college='$college',qualification='$qual',profession='$profession',subjects='$book',test_topic='$u_level' WHERE user_id='$user_id' AND user_email='$email'";
                $runs = mysqli_query($connection,$insertion);*/

				
				if($run){
					echo "<script>alert('Your subject details are updated')</script>";
					echo "<script>window.open('dashboard.php','_self')</script>";

				  $upd = "update register set test_update='Ready' where user_id='$user_id'";
				   $run_updated= mysqli_query($connection,$upd);
					
					exit();
				}
				else{
					echo "<script>alert('Your subject details are not updated')</script>";
					exit();
				}
			
	
		}
	}

    function new_members(){
    	global $connection;
    	//select new members
    	$user = "select * from register LIMIT 0,20";

    	$run_user = mysqli_query($connection,$user);
    	echo "<br/><h5>New members on this network:</h5><hr/>";
    	while($row_user=mysqli_fetch_array($run_user)){
    		$user_id = $row_user['user_id'];
    		$user_name = $row_user['user_name'];
    		$user_img = $row_user['user_img'];

    		echo "
    		<a href='user_profile.php?u_id=$user_id'>
    		<img src='user/user_images/$user_img' width='50' height='50' title='$user_name'>
    		</a>
    		
    		";
    	}

    }
    //commenting function
    

    
	?>