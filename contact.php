<?php 
include 'function.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="rnp.png"/>
<link rel="stylesheet" type="text/css" href="contact.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CONTACT US</title>
</head>
<body>
<h2>Contact us</h2>
<div class="frm">
<form method="post" action="send.php" enctype="multipart/form-data">
    <input type="text" name="user_name" placeholder="First name only" minlength="3" size="40" maxlength="25" required pattern="[a-zA-Z0-9]+"><br/>
    <br />
    <input type="email" name="email" placeholder="Valid Email address" size="40" maxlength="25" required=""> <br/> <br />
    <input type="tel" name="mobile number" placeholder="+(Country pin)-mobile number" size="40" maxlength="25" required ="">
 <br/> <br />
    <textarea placeholder="Comments"  name="Comments" cols="50" rows="7" minlength="3" maxlength="200" required pattern="[a-zA-Z0-9]+"></textarea> 
   <input type="submit" name="submitt" value="Submit">
     </form>
     </div>

<h4> <a href="mailto:harisjamal96@yahoo.com">Email Me-</a></h4>


<div class="foot">
        <ul>
            <li><a href="#">Terms</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="contact.htm">Contacts</a></li>
        </ul>
        <p>Online exam portal &copy 2018</p>
        
    </div>
    <?php 
    if (isset($_POST['submitt'])) {

        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $mobile_number = $_POST['mobile_number'];
        $Comments = addslashes($_POST['Comments']);

        $go = "insert into feedbacks (feed_name,feed_email,feed_number,feed_comments) values ('$user_name', '$email', '$mobile_number', '$Comments')";
       $run = mysqli_query($connection,$go);
       if($run){
        echo "<script>window.open('send.php', '_self')</script>";
       }else{
        echo "<script>alert('you comments are not posted')</script>";
       }



     } 
     ?>

</body>
</html>


