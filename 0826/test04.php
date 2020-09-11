<h3>Hey!Hey!~</h3>

<p>Grade</p>

<?php
 $chi = 62;
 $eng = 80;
 $math = 90;
 $geo = 70;
 $total= $chi + $eng + $math +$geo;
 $avg = $total/4;

 echo "總分: ".$total."分<br>";
 echo "平均: ".$avg."分<br>";
 
 if($avg<60){
 	echo "<b>FALL</b>";
 } else if($avg<70){
 	echo "<b>PASS_D</b>";
 } else if($avg<80){
 	echo "<b>PASS_C</b>";
 } else if($avg<90){
 	echo "<b>PASS_B</b>";
 } else {
 	echo "<b>PASS_A</b>";
 }

?>

