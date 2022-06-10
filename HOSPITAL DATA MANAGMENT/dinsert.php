<?php
$conn = mysqli_connect("localhost","root","","hospital");
$docid = $_POST["id"];
$fname = $_POST["fn"];
$lname = $_POST["ln"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$specialist = $_POST["spe"];
$phno = $_POST["phno"];
$email = $_POST["em"];
$address = $_POST["add"];
$sql = "INSERT INTO doctor(doc_id,doc_first_name,doc_last_name,gender,dob,specalist,phone_no,email_id,address) 
VALUES ('$docid','$fname','$lname','$gender','$dob','$specialist','$phno','$email','$address')";
$result = mysqli_query($conn, $sql);
if($result){
header('location:ddata.html');
}
else
header('location:dinsert.html');
?>
