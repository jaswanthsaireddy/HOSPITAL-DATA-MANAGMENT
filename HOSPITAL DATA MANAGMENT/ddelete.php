<?php
$conn = mysqli_connect("localhost","root","","hospital");
$docid = $_GET["doc_id"];
$sql = "delete from doctor where doc_id='$docid';";
$result = mysqli_query($conn, $sql);
if($result)
header('location:ddata.html');
else
header('location:dupdate.html'); 
?>
