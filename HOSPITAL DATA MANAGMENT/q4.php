<?php
$conn = mysqli_connect("localhost","root","","hospital");
$sql = "select count(doc_id) from doctor group by specalist;";
$result = mysqli_query($conn, $sql)or die( mysqli_error($conn));
print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
   <td width=100>doc_id</td> 
  
  
  </tr>"; 
 while($row = mysqli_fetch_array($result))
 { 
print "<tr>"; 
print "<td>" . $row[''] . "</td>"; 


print "</tr>"; 
} 
print "</table>"; 
?>
