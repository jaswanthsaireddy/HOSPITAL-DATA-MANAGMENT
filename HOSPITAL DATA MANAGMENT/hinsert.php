<?php
$conn = mysqli_connect("localhost","root","","hospital");
$invn = $_POST["no"];
$invd = $_POST["date"];
$ba = $_POST["ba"];
$pt = $_POST["pay"];
$dis = $_POST["dis"];
$patid = $_POST["patid"];
$sql = "INSERT INTO hospital_bill(inv_no,inv_date,bill_amount,payment_type,discount,patient_id) 
VALUES ('$invn','$invd','$ba','$pt','$dis','$patid')";
$result = mysqli_query($conn, $sql);
if($result){
header('location:hdata.html');
}
else
header('location:hinsert.html');
?>
