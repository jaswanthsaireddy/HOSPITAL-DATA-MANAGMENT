<?php
$conn = mysqli_connect("localhost","root","","hospital");
$staffid = $_POST["id"];
$fname = $_POST["fn"];
$lname = $_POST["ln"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$category = $_POST["cat"];
$phno = $_POST["phno"];
$email = $_POST["em"];
$address = $_POST["add"];
$sql = "INSERT INTO staff(staff_id,staff_first_name,staff_last_name,gender,dob,category,phone_no,email_id,address) 
VALUES ('$staffid','$fname','$lname','$gender','$dob','$category','$phno','$email','$address')";
$result = mysqli_query($conn, $sql);
if($result){
header('location:sdata.html');
}
else
header('location:sinsert.html');
?>
