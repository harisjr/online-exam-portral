<?php
/*mysqli_connect("localhost","root","") or die("server connection failed");
mysqli_select_db("user feild") or die("database not found");*/
?>
<?php
$dbhost="localhost";
$dbname="Oep";
$dbuser="root";
$dbpass="";

try {
	$db=new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOExeption$e) {
	echo "connection error: ".$e->getMessage();
}
?>