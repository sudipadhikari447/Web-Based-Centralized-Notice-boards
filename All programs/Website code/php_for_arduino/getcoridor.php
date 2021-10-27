<?php
$conn = mysqli_connect("localhost","root","","notices");
$result = mysqli_query($conn, "SELECT * FROM coridor ORDER BY id DESC");
$row = mysqli_fetch_array($result);
if(!empty($row)) {
	$notice = $row['coridor_notice'];
	$date = $row['date'];
	$return = "(Notice is updated on ".$date.") --------------------                      ".$notice;
	echo($return);
}
?>