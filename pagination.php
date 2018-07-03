<?php
$query = "select * from topics";
$result = mysqli_query($connection,$query);
//count the total records
$total_posts = mysqli_num_rows($result);
//using ceil function to devide the total records on per page
$total_pages = ceil($total_posts/ $per_page);
//going to first page
echo "<center>
<div id='pagination'>
<a href='posts.php?page = 1'><span class=\"imoz\">First page</span></a>";

for ($i=1;$i<=$total_pages; $i++){
	echo "<a href='posts.php?page=$i'>$i</a>";
}
//going to last page
echo " <a href='posts.php?page=$total_pages'><span class=\"imoz\">Last page</span></a></center></div>";



?>