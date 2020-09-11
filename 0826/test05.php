<h2>Interest trial</h2>
<hr>
<?php
  $fond =5000000;
  $rate =1.8;
  $year =20;
  
  echo "<table border=1.5 width=250>";

  echo "<tr>";
  echo "<td bgcolor=#F2D8B3>本金 </td> <td>NTD$".$fond."</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td bgcolor=#F2D8B3>利率 </td> <td>".$rate."%</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td bgcolor=#F2D8B3>期數</td><td>".$year."年</td>";
  echo "</tr>";

  $s_amount= $fond* (1+$rate/100*$year);
  $c_amount= $fond* (1+$rate/100) ** $year;

  echo "<tr>";
  echo "<td bgcolor=#F2D8B3>單利 trial</td><td>NTD$".$s_amount."</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td bgcolor=#F2D8B3>複利 trial</td><td>NTD$".(int) $c_amount."</td>";
  echo "</tr>";
  echo "</table>";

?>



