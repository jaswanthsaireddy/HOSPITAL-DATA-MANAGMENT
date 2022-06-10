<?php
$conn = mysqli_connect("localhost","root","","hospital");
$id = $_GET["id"];
$fn = $_GET["fn"];
$rn = $_GET["rn"];
$bn = $_GET["bn"];
if(empty($fn & $rn))
$sql = "UPDATE in_patient set bed_no='$bn' where patient_id='$id';";
elseif(empty($rn & $bn))
$sql = "UPDATE in_patient set floor_no='$fn' where patient_id='$id';";
elseif(empty($fn & $bn))
$sql = "UPDATE in_patient set room_no='$rn' where patient_id='$id';";
elseif(empty($fn))
$sql = "UPDATE in_patient set room_no='$rn',bed_no='$bn' where patient_id='$id';";
elseif(empty($rn))
$sql = "UPDATE in_patient set floor_no='$fn',bed_no='$bn' where patient_id='$id';";
elseif(empty($bn))
$sql = "UPDATE in_patient set floor_no='$fn',room_no='$rn' where patient_id='$id';";
else 
$sql = "UPDATE in_patient set floor_no='$fn',room_no='$rn',bed_no='$bn' where patient_id='$id';";
$result = mysqli_query($conn, $sql);
if($result)
header('location:idata.html');
else
header('location:iupdate.html');
?>
