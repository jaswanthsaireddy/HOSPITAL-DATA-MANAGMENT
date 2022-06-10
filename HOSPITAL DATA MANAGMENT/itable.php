<?php
$conn = mysqli_connect("localhost","root","","hospital");
$sql = "select * from in_patient;";
$result = mysqli_query($conn, $sql);
print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
   <td width=100>patient_id</td> 
  <td width=100>date_of_admission</td> 
  <td width=100>floor_no</td> 
  <td width=100>room_no</td> 
  <td width=100>bed_no</td>
  
  
  </tr>"; 
 while($row = mysqli_fetch_array($result))
 { 
print "<tr>"; 
print "<td>" . $row['patient_id'] . "</td>"; 
print "<td>" . $row['date_of_admission'] . "</td>"; 
print "<td>" . $row['floor_no'] . "</td>"; 
print "<td>" . $row['room_no'] . "</td>";
print "<td>" . $row['bed_no'] . "</td>";


print "</tr>"; 
} 
print "</table>"; 
?>
