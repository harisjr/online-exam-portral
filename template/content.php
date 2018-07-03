<div class="registration">
		<h3>Register</h3>
	
	    <form action="" method="post" id="">
		<input type="text" name="name" placeholder="Full name" size="50" required=""><br/><br/>
		<select name="gender" required="required" style="width: 350px;position: relative;left: 80px; height: 30px; color:black; border-radius: 5px; border: 1px solid black;  "> 
                       <option>Select gender</option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
		            </select><br/><br/>
		 <input type="text" name="city" placeholder="City" size="50" required=""><br/><br/>
		 <input type="text" name="state" placeholder="state" size="50" required=""><br/><br/>
		<input type="email" name="email" placeholder="Email-ID" size="50" required=""><br/><br/>
		<input type="password" name="password" placeholder="Password" size="50 required"><br/><br/>
		<input type="text" name="mobile" placeholder="Mobile number" size="50" required="" pattern=".{10,10}"><br/><br/>
		<input class="go" type="submit" name="submit1" value="Create">
		</form>
		<?php include ('user_funtion.php');?>
		<h4><a href="admin/admin_login.php">Admin panel</a></h4>

	</div>