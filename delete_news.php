

<?php

include("config.php");

$news_id = $_GET['id'];

$sql = "DELETE FROM `news` WHERE id = {$news_id}";

$result = mysqli_query($conn, $sql);



if (isset($result)) {
	header("Location: http://localhost/web_development_career/full_dainamic_alo/users.php");
}else{
	echo "<p> Can Not Delete Your News </p>";
}
 ?> 