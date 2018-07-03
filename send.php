<?php 
include 'function.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="rn.png" />
<link rel="stylesheet" type="text/css" href="send.css">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Submitted</title>
</head>
<body>
<h2>YOU ARE CONNECTED</h2>
<?php 
$sum = "select * from feedbacks";
$summ = mysqli_query($connection,$sum);
$row=mysqli_fetch_array($summ);

$user_name = $row['user_name'];
$email = $row['email'];
$mobile_number = $row['mobile_number'];
$Comments = $row['Comments'];

print "<span class=\"text\">hey $user_name! thanks for connecting in Online exam portal...";


print "your comments: <p>$Comments</p>- are valuable. </span>";

print "<span class=\"odd\">$email & number-$mobile_number has been noted...</span>";


?>

<div class="base">
<ul>
	<li><a class="pn" href="index.php">HOME</a></li>
    <li><a class="pn" href="#">TERMS</a></li>
    <li><a class="pn" href="faq.htm">FAQ</a></li>
    <li><a class="pn" href="contact.php">CONTACT</a></li>
</ul>
<h5>Online exam portal ©2018</h5>
</div>



</div>
</body>
</html>