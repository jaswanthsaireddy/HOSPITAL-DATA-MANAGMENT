<?php
$conn = mysqli_connect("localhost","root","","hospital");
$sql = "select hospital_bill.inv_no from hospital_bill,patient where hospital_bill.patient_id=patient.patient_id;";
$result = mysqli_query($conn, $sql)or die( mysqli_error($conn));
print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
   <td width=100>inv_no</td> 
  
  
  </tr>"; 
 while($row = mysqli_fetch_array($result))
 { 
print "<tr>"; 
print "<td>" . $row['inv_no'] . "</td>"; 


print "</tr>"; 
} 
print "</table>"; 
?>
