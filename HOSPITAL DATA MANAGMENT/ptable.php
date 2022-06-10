<?php
$conn = mysqli_connect("localhost","root","","hospital");
$sql = "select * from patient;";
$result = mysqli_query($conn, $sql);
print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
   <td width=100>patient_id:</td> 
  <td width=100>patient_first_name</td> 
  <td width=100>patient_last_name</td> 
  <td width=100>gender</td> 
  <td width=100>address</td>
  <td width=100>dob</td> 
  <td width=100>phone_no</td> 
  <td width=100>doc_id</td> 
  <td width=100>in_no</td> 
  </tr>"; 
 while($row = mysqli_fetch_array($result))
 { 
print "<tr>"; 
print "<td>" . $row['patient_id'] . "</td>"; 
print "<td>" . $row['patient_first_name'] . "</td>"; 
print "<td>" . $row['patient_last_name'] . "</td>"; 
print "<td>" . $row['gender'] . "</td>";
print "<td>" . $row['address'] . "</td>";
print "<td>" . $row['dob'] . "</td>";
print "<td>" . $row['phone_no'] . "</td>";
print "<td>" . $row['doc_id'] . "</td>"; 
print "<td>" . $row['inv_no'] . "</td>"; 
print "</tr>"; 
} 
print "</table>"; 
?>
