<?php
$conn = mysqli_connect("localhost","root","","hospital");
$id = $_POST["id"];
$date = $_POST["date"];
$fn = $_POST["fn"];
$rn = $_POST["rn"];
$bn = $_POST["bn"];
$sql = "INSERT INTO in_patient(patient_id,date_of_admission,floor_no,room_no,bed_no) 
VALUES ('$id','$date','$fn','$rn','$bn')";
$result = mysqli_query($conn, $sql);
if($result){
header('location:idata.html');
}
else
header('location:iinsert.html');
?>
