<?php
$conn = mysqli_connect("localhost", "root", "", "login");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password)
{
echo '<script type="text/javascript"> alert("Logged in Successfully!") </script>';
	header('location:welcome.php');
}
else{
header("Location:back.php");}
?>