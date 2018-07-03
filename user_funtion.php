<?php
include('function.php');
if(isset($_POST['submit1'])){

		
        $name = mysqli_real_escape_string($connection,$_POST['name']);
	    $email = mysqli_real_escape_string($connection,$_POST['email']);
	    $password = mysqli_real_escape_string($connection,$_POST['password']);
	    $mobile = mysqli_real_escape_string($connection,$_POST['mobile']);
	    $city = mysqli_real_escape_string($connection,$_POST['city']);
	    $state = mysqli_real_escape_string($connection,$_POST['state']);
	    $gender = $_POST['gender'];
	    $date = date("d-m-y");
	    $date2 = date('Y-m-d g:i:s');
	    $active = "unverified";
	    $posts = "no";
	    $test_update = "not ready";
	    

	    $get_email = "select * from register where user_email='$email'";
	    $run_email = mysqli_query($connection,$get_email);
	    $check = mysqli_num_rows($run_email);

	    if($check==1){
	    	echo "<script>alert('This email is already registered. please try anothor one')</script>";
	    	exit();
	    }
	    if(strlen($password)<8){
	    	echo "<h2>Password should be minimum 8 characters</h2>";
	    	exit();
	    }
	    else {

	    	$insert = "insert into register(user_name,user_gender,user_city,user_state,user_email,user_password,user_mobile,user_img,test_update,reg_date,last_login,active,posts) values ('$name', '$gender', '$city', '$state', '$email', '$password', '$mobile', 'default.jpg', '$test_update', '$date', '$date2', '$active','$posts')"; 
	    	$run_insert = mysqli_query($connection,$insert);
	    	if($run_insert){
	    		$_SESSION['user_email']=$email;
	    		echo "<script>alert('You have successfully registered!')</script>";
	    		echo "<script>window.open('profile.php', '_self')</script>";
	    	}
	    }


	    	}

 ?>

