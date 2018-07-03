<?php
session_start();
include 'function.php';
include("template/profile_template.php");
if(!isset($_SESSION['user_email'])){

	header("location:index.php");
}
else{
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="rnp.png"/>
	<meta charset="utf-8">
	<title>Dashboard | Edit</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
	<div id="user_details"  style="position: relative; left: 400px; width: 600px; height: 600px; box-shadow: 1px 1px 2px black;">
		<h2>Edit your Details</h2>
		<?php
		
				$email = $_SESSION['user_email'];
				$get_user = "select * from register where user_email='$email'";
				$run_user = mysqli_query($connection,$get_user);
				$row=mysqli_fetch_array($run_user);
				$user_img = $row['user_img'];
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
                 $user_city = $row['user_city'];
                $user_state = $row['user_state'];
                $user_gender = $row['user_gender'];
				$user_email = $row['user_email'];
				$user_mobile = $row['user_mobile'];
				$reg_date = $row['reg_date'];
				

				echo "
				<p><span class=\"imo\"><img src='user/user_images/$user_img' width='180px' height='180px' border-radius='50px' position='relative' left='10px'/></span></p>";?>
				
				<div class="mid">
					<form action="" method="get" enctype="multipart/form-data">
					<input type="text" name="name" placeholder="Name" required="" value="<?php echo "$user_name"; ?>" class="rip"><br/>
					<input type="text" name="city" required="" placeholder="City" value="<?php echo "$user_city"; ?>" class="rip"><br/>
		            <input type="text" name="state" required="" placeholder="State" value="<?php echo "$user_state"; ?>" class="rip"><br/>
					<select name="gender" required="required" style="width: 160px; height: 30px; color:black; position: relative;top: 120px; right: 380px; background-color:#e3e3e3; border-radius: 5px; border: 1px solid black; width: 300px; "> 
                       <option value="">Select Gender-</option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
		            </select>
		            <input type="email" name="email" placeholder="Email-ID" required="" value="<?php echo "$user_email"; ?>" class="rip"><br/>
					<input type="text" name="mobile" required="" placeholder="mobile" value="<?php echo "$user_mobile"; ?>" class="rip"><br/>
					<input type="file" name="image" value="Upload image" style="position: fixed;bottom: 370px; left: 130px; width: 200px;">
					<input type="submit" name="update" value="Update" class="cat" style="width: 400px; height: 40px; border-radius: 5px; font-family: sans-serif; font-size: 25px; letter-spacing: 3px; color: #e3e3e3; background-color: #3d8e64; border:1px solid #3d8e64; box-shadow: 0px 0px 1px black; position:fixed; left: 500px; top: 600px">
						</form>
						<?php
						if(isset($_POST['update'])){
							$user_id = $_POST['user_id'];
							$name = $_POST['name'];
							$gender = $_POST['gender'];
							$city = $_POST['city'];
							$state = $_POST['state'];
							$email = $_POST['email']; 
							$mobile = $_POST['mobile'];
							$image = $_FILES['image']['name'];
							$image_tmp = $_FILES['image']['tmp_name'];

							move_uploaded_file($image_tmp,"user/user_images/$image");

							$update = "update register set user_name='$name', user_gender='$gender', user_city='$city', user_state='$state', user_email='$email', user_mobile='$mobile', user_img='$image' where user_id='$user_id'";

							$run = mysqli_query($connection,$update);

							if ($run) {
								echo "<script>alert('Your profile has been updated')</script>";
								echo "<script>window.open('dashboard.php','_self')</script>";
							}
							else{
								echo "<script>alert('Your profile has not been updated properly')</script>";
							}
						}
						?>
				</div>

				
			</div>
	
</body>
</html>
<?php }?>

