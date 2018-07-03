<?php
include 'function.php';
if(!isset($_SESSION['user_email'])){

	header("location:index.php");
}
else{
?><!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script type="text/javascript" src="cp.js"></script>
</head>
<style type="text/css">
	input{
		height: 25px;
		border-radius: 5px;
		border: 1px solid
	}
	.btnSubmit{
  margin: 0;
  width: 70px;
  height: 30px;
  font-size: 16px;
  border-radius: 5px;
  display: inline;
  border: 1px solid #d63333;
  background-color: #d63333;
  color: #e3e3e3;
  position: relative;left: 400px; 
  
}
.btnSubmit:hover{
  background-color:#d63333;
  color: #e3e3e3;
  border: 1px solid #d63333;
  box-shadow: 0px 1px 3px black;
  
}
</style>
<body>
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm" style="position: relative;left: 400px; top: -150px;">
<tr class="tableheader">
<td colspan="2" style="font-family: sans-serif;color: #424447; font-weight: bold;">Change Password</td>
</tr>
<tr>
<td width="40%"><label>Current Password*</label></td>
<td width="60%"><input type="password" size="40" placeholder="Current Password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
</tr>
<tr>
<td><label>New Password*</label></td>
<td><input type="password" size="40" placeholder="New Password" name="newPassword" class="txtField"/><span id="newPassword" class="required" ></span></td>
</tr>
<td><label>Confirm Password*</label></td>
<td><input type="password" size="40" placeholder="Confirm Password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
</html>
<?php } ?>