<?php
    session_start();
    $username = $_SESSION["username"];
    if ($username ==NULL) {
      header("Location: login.php?redir=lotto.php");
      exit;
    }
?>



<h2>超神準大樂透預測王</h2>
<hr>

<?php

  echo "預測號碼:";
  $count = 0; //目前取得的數字個數
  while ($count < 6) {
  	 $t = rand(1,49); //先取得一個候選的隨機數
  	 if (in_array($t, $lotto)) continue ;
  	 $lotto[] = $t;
  	 $count ++ ;
  }
  
  sort($lotto);
  foreach ($lotto as $nu) {
  	 echo $nu . ",";
  }

  echo "<br>特別號:";

   $spec = rand(1,49);
    while (in_array($spec,$lotto )) 
  	  $spec = rand(1,49);
   echo $spec;	 
  

?>
<hr>
不准免錢,有中歡迎斗內~~

<hr>
<iframe width="560" height="315" src="https://www.youtube.com/embed/hql8rV-eidE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<br>
<br>
<br>
<br>
<hr>
<?php
 for ($i=0; $i <20 ; $i++) { 
    echo rand(1,100);
    if ($i<19){
    	echo ", ";
    }
 }
   echo "<br>"; 
   include "footer.php";
?>