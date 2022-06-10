<?php
$conn = mysqli_connect("localhost","root","","hospital");
$invn = $_GET["no"];
$pay = $_GET["pay"];
$bill = $_GET["ba"];
if(empty($pay))
$sql = "UPDATE hospital_bill set bill_amount='$bill' where inv_no='$invn';";
elseif(empty($bill))
$sql = "UPDATE hospital_bill set payment_type='$pay' where inv_no='$invn';";
else 
$sql = "UPDATE hospital_bill set bill_amount='$bill',payment_type='$pay' where inv_no='$invn';";
$result = mysqli_query($conn, $sql);
if($result)
header('location:hdata.html');
else
header('location:hupdate.html');
?>
