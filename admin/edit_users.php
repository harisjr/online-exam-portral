<?php 
include("../function.php");
if (isset($_GET['edit'])) {
	$edit_id = $_GET['edit'];
    $sel_users = "select * from register where user_id='$edit_id'";
	$run_users = mysqli_query($connection,$sel_users);
	$row_users = mysqli_fetch_array($run_users);
		$user_id = $row_users['user_id'];
		$user_name = $row_users['user_name'];
		$user_img = $row_users['user_img'];
		$user_email = $row_users['user_email'];
		$user_mobile = $row_users['user_mobile'];
		$reg_date = $row_users['reg_date'];
		$active = $row_users['active'];

		?>

<div class="ramp" style="position: fixed; left: 500px; top: 200px; line-height: 20px;margin:10px; padding: 10px;">
	<h3 style="color: #3d4044; font-family: sans-serif;">Custom Edit</h3>
                   <form action="" method="get" enctype="multipart/form-data">
					<input type="text" name="name" placeholder="Name" required="" size="50" value="<?php echo "$user_name"; ?>" class="rip"><br/><br/>
					<input type="email" name="email" placeholder="Email-ID" required="" size="50" value="<?php echo "$user_email"; ?>" class="rip"><br/><br/>
					<input type="text" name="mobile" required="" placeholder="mobile" size="50" value="<?php echo "$user_mobile"; ?>" class="rip"><br/><br/>
					<label>Image:</label><input type="file" name="image" value="Upload image" required=""">
					<input type="submit" name="sub3" value="Update" class="cat" style="width: 70px; height: 30px; border-radius: 5px; font-family: sans-serif; font-size: 13px; letter-spacing: 3px; color: #e3e3e3; background-color: #3d8e64; border:1px solid #3d8e64; box-shadow: 0px 0px 1px black; position:fixed; left: 700px; top: 450px">
						</form>
						<a href="index.php?view_users"><p>Go back</p></a></div>
						<?php } ?>

						<?php
						if(isset($_POST['edit'])){
							$name = $_POST['name'];
							$email = $_POST['email'];
							$mobile = $_POST['mobile'];
							$image = $_FILES['image']['name'];
							$image_tmp = $_FILES['image']['tmp_name'];

							move_uploaded_file($image_tmp,"user/user_images/$u_image");

							$update = "update register set user_name='$name',user_email='$email', user_mobile='$mobile',user_img='$image' where user_id='$user_id'";
							$run =mysqli_query($connection,$update);

							if ($run) {
								echo "<script>alert('Your profile has been updated')</script>";
								echo "<script>window.open('index.php?view_users','_self')</script>";
							}
						}
						?>