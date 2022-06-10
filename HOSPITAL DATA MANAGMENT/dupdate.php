<?php
$conn = mysqli_connect("localhost","root","","hospital");
$docid = $_GET["docid"];
$phone = $_GET["no"];
$address = $_GET["add"];
if(empty($phone))
$sql = "UPDATE doctor set address='$address' where doc_id='$docid';";
elseif(empty($address))
$sql = "UPDATE doctor set phone_no='$phone' where doc_id='$docid';";
else 
$sql = "UPDATE doctor set address='$address',phone_no='$phone' where doc_id='$docid';";
$result = mysqli_query($conn, $sql);
if($result)
header('location:ddata.html');
else
header('location:dupdate.html');
?>
