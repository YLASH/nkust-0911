<button type=button><a href="index.php">回首頁</a></button>
<button type=button><a href="http://localhost/mysite/0828/test01.php?height=168&weight=72">Tim's BMI</a></button>
<button type=button><a href="http://localhost/mysite/0828/test01.php?height=175&weight=55">Tam's BMI</a></button>
<button type=button><a href="http://localhost/mysite/0828/test01.php?height=188&weight=83">Tom's BMI</a></button>

<hr>

<?php
  
  function computeBMI($height, $weight){
          echo "Height: ".$height."cm<br>";
          echo "Weight: ".$weight."kg<br>";
          $bmi=$weight/($height/100)**2;
          echo "BMI: ".$bmi. "<br><br>";
          if($bmi<18.5){
            echo "<b>該多吃點,體重有點太輕囉!!</b>";
          } else if($bmi>24){
            echo "<b>該運動囉,體重有點太重囉!!</b>";
          } else{
            echo "<b>保養很好,體重很標準唷!!</b>";
          }
        }


   $height = $_GET["height"];
   $weight = $_GET["weight"];

   if ($height!=NULL and $weight!=NULL) {
      computeBMI($height, $weight);
    } else {
      echo "請於網址列輸入正確資料才能計算 <br>";
      echo "例:http://localhost/mysite/0828/test01.php?height=174&weight=68";
  }
  

 

 ?>

