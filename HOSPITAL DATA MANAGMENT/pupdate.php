<?php
$conn = mysqli_connect("localhost","root","","hospital");
$patid = $_GET["patid"];
$phone = $_GET["no"];
$address = $_GET["add"];
if(empty($phone))
$sql = "UPDATE patient set address='$address' where patient_id='$patid';";
elseif(empty($address))
$sql = "UPDATE patient set phone_no='$phone' where patient_id='$patid';";
else 
$sql = "UPDATE patient set address='$address',phone_no='$phone' where patient_id='$patid';";
$result = mysqli_query($conn, $sql);
if($result)
header('location:pdata.html');
else
header('location:pupdate.html');
?>
