<?php
$conn = mysqli_connect("localhost","root","","hospital");
$invn = $_GET["no"];
$sql = "delete from hospital_bill where inv_no='$invn';";
$result = mysqli_query($conn, $sql);
if($result)
header('location:hdata.html');
else
header('location:hupdate.html'); 
?>
