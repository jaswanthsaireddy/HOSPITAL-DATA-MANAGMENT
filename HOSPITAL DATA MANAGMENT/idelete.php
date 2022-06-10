<?php
$conn = mysqli_connect("localhost","root","","hospital");
$id = $_GET["id"];
$sql = "delete from in_patient where patient_id='$id';";
$result = mysqli_query($conn, $sql);
if($result)
header('location:idata.html');
else
header('location:iupdate.html'); 
?>
