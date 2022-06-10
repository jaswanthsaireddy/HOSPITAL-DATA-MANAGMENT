<?php
$conn = mysqli_connect("localhost","root","","hospital");
$username = $_GET["name"];
$password = $_GET["password"];
$sql = "select username,password from admin where username='$username' and password='$password';";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
if($count){
header('location:admin page.html');
}
else
header('location:Admin Login.html');
?>
