<?php
    function accumulate ($n){
        $total=0;
        for ($i=1; $i <=$n ; $i++) {
            $total += $i; //把$i加到$total中 
        }
        return $total; 
    }

     function fact($n){
        $total=1;
        for ($i=1; $i <=$n ; $i++) {
            $total *= $i; //把$i加到$total中 
        }
        return $total;
    }
     for ($i=1; $i <=20 ; $i+=2) { 
     	echo accumulate($i) . " | ".fact($i). "<br>"; 
     }

    function gen_row($bgc,$c1,$bgc2, $c2, $c3){
        echo "<tr bgcolor=$bgc><td>$c1</td><td bgcolor=$bgc2>$c2</td><td>$c3</td></tr>";
     	 
     	}

    echo "<table border=0.5 width=300>";
    gen_row("#82A0C2","i","#82A0C2","accu","fact");
     for ($i=1; $i < 20; $i++) {
     	if ($i%2)
     		gen_row("#F7A992",$i, "#FDF0C4", accumulate($i), fact($i));
     	else
     		gen_row("#FDF0C4",$i, "#F7A992", accumulate($i), fact($i));
     	
     }
    echo "</table>";


    


?>
