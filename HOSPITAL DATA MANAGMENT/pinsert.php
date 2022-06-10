<?php
$conn = mysqli_connect("localhost","root","","hospital");
$patid = $_POST["id"];
$fname = $_POST["fn"];
$lname = $_POST["ln"];
$gender = $_POST["gender"];
$address = $_POST["add"];
$dob = $_POST["dob"];
$phno = $_POST["phn"];
$docid = $_POST["docid"];
$inv = $_POST["inv"];
$sql = "INSERT INTO patient(patient_id,patient_first_name,patient_last_name,gender,address,dob,phone_no,doc_id,inv_no) 
VALUES ('$patid','$fname','$lname','$gender','$address','$dob','$phno','$docid','$inv')";
$result = mysqli_query($conn, $sql);
if($result){
header('location:pdata.html');
}
else
header('location:pinsert.html');
?>
