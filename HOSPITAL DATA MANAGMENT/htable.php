<?php
$conn = mysqli_connect("localhost","root","","hospital");
$sql = "select * from hospital_bill;";
$result = mysqli_query($conn, $sql);
print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
   <td width=100>inv_no</td> 
  <td width=100>inv_date</td> 
  <td width=100>bill_amount</td> 
  <td width=100>payment_type</td> 
  <td width=100>discount</td>
  <td width=100>patient_id</td> 
  
  </tr>"; 
 while($row = mysqli_fetch_array($result))
 { 
print "<tr>"; 
print "<td>" . $row['inv_no'] . "</td>"; 
print "<td>" . $row['inv_date'] . "</td>"; 
print "<td>" . $row['bill_amount'] . "</td>"; 
print "<td>" . $row['payment_type'] . "</td>";
print "<td>" . $row['discount'] . "</td>";
print "<td>" . $row['patient_id'] . "</td>";

print "</tr>"; 
} 
print "</table>"; 
?>
