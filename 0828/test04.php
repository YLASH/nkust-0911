
<?php  
   $rate_list = array(
        array("name"=>"美金","id"=>"USD","rate"=>28.95),
        array("name"=>"英鎊","id"=>"GBP","rate"=>37.76),
        array("name"=>"澳幣","id"=>"AUD","rate"=>21.07),
        array("name"=>"加幣","id"=>"CAD","rate"=>21.94),
        array("name"=>"歐元","id"=>"EUR","rate"=>34.07),
        array("name"=>"日圓","id"=>"JPY","rate"=>0.273)
    );
   
   //部分取,或有條件__適合用for迴圈取出陣列中內容
   //for ($i=0; $i <count($rate_list) ; $i++) { 
   //echo $rate_list[$i]["name"].$rate_list[$i]["id"].$rate_list[$i]["rate"]."<br>";
   // }
?>
<form method="POST" action="test04.php">
	新台幣:<input type="text" size="7" name="money" value="500">元
	   換 :<select name="dollar">

<?php

    //全部取__適合用foreach迴圈取出陣列中內容
    //foreach ($rate_list as $r ) {
    //  	echo "<option value=".$r["id"].">".$r["name"]."</option>";
    //  }  
    for ($i=0; $i <count($rate_list) ; $i++) { 
       echo "<option value=".$i .">".$rate_list[$i]["name"]."</option>";   
    }


?> 
    </select>
    <br>
	<input type="submit" value="exchange">
</form>

<?php
    $money =$_POST["money"];
    $dollar =$_POST["dollar"];

    echo "新台幣". $money."<br>";
    echo "匯率為". $rate_list[$dollar]["rate"] ."<br>";

    $result = $money/$rate_list[$dollar]["rate"];

    echo "=". round($result,2) .$rate_list[$dollar]["name"];


?>


