<?php
$conn = mysqli_connect("localhost","root","","hospital");
$id = $_GET["patid"];
$sql = "delete from patient where patient_id='$id';";
$result = mysqli_query($conn, $sql);

print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
   <td width=100>staff_id:</td> 
  <td width=100>staff_first_name</td> 
  <td width=100>staff_last_name</td> 
  <td width=100>gender</td> 
  <td width=100>dob</td>
  <td width=100>category</td> 
  <td width=100>phone_no</td> 
  <td width=100>email_id</td> 
  <td width=100>address</td> 
  </tr>"; 
 while($row = mysqli_fetch_array($result))
 { 
print "<tr>"; 
print "<td>" . $row['staff_id'] . "</td>"; 
print "<td>" . $row['staff_first_name'] . "</td>"; 
print "<td>" . $row['staff_last_name'] . "</td>"; 
print "<td>" . $row['gender'] . "</td>";
print "<td>" . $row['dob'] . "</td>";
print "<td>" . $row['category'] . "</td>";
print "<td>" . $row['phone_no'] . "</td>";
print "<td>" . $row['email_id'] . "</td>"; 
print "<td>" . $row['address'] . "</td>"; 
print "</tr>"; 
} 
print "</table>"; 
?>
