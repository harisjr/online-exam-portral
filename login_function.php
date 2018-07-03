<?php


include 'function.php';

if(isset($_POST['login1'])){

		
        $email = mysqli_real_escape_string($connection,$_POST['email']);
	    $password = mysqli_real_escape_string($connection,$_POST['password']);

	    $get_user = "select * from register where user_email='$email' AND user_password='$password'";
	    $run_user = mysqli_query($connection,$get_user);
	    $check = mysqli_num_rows($run_user);

	    if ($check==1) {
	    	$_SESSION['user_email']=$email;
	    	echo "<script>window.open('profile.php', '_self')</script>";
	    }
	    else{
	    	echo "<script>alert('email and password are not correct')</script>";
	    }
	}
	?>