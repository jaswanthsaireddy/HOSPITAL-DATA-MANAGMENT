<?php
$conn = mysqli_connect("localhost","root","","hospital");
$userid = $_GET["user"];
$sql = "select email_id, from staff where email_id='$userid';";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
if($count=1){
header('location:staff page.html');
}
else
header('location:staff Login.html');
?>
