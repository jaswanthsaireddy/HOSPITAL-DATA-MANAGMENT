<?php
$conn = mysqli_connect("localhost","root","","hospital");
$staffid = $_GET["staffid"];
$phone = $_GET["no"];
$address = $_GET["add"];
if(empty($phone))
$sql = "UPDATE staff set address='$address' where staff_id='$staffid';";
elseif(empty($address))
$sql = "UPDATE staff set phone_no='$phone' where staff_id='$staffid';";
else 
$sql = "UPDATE staff set address='$address',phone_no='$phone' where staff_id='$staffid';";
$result = mysqli_query($conn, $sql);
if($result)
header('location:sdata.html');
else
header('location:supdate.html');
?>
