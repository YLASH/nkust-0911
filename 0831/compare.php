<?php
    session_start();
    $username = $_SESSION["username"];
    if ($username ==NULL) {
      header("Location: login.php?redir=lotto.php");
      exit;
    }
    $tags= "<iframe width='600' height='325' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>產品比較</title>
</head>
<body>
	<h3>SONY compare</h3>
	
	<?php 
	//echo $tags;
	$fp = fopen("products.txt", "r") or die("Die!");
	    $data = fread($fp,filesize("products.txt"));
	 fclose($fp);
	 ?>
<form method="post" action="compare.php">
	<select name="products" >
	 <?php
	 $cars = explode("\n", $data);	  //explode 用來以換列字元來猜解讀取到的資料
	   //echo count($cars); -->4
     foreach ($cars as $car) {     //利用explode把$car拆解成2個項目,放在$temp變數中
     	$temp = explode(",", $car); //$temp這時候是一個陣列 
     	$model = $temp[0];    //第1個項目$temp[0]為產品名,放到$model變數中
     	//trim清除空白字元
     	$vid = trim($temp[1]);      //第2個項目$temp[0]為網址,放到$vid變數中
     	//echo $model ."/".$vid ."<br>";
     	//echo $temp; //--->Array
     	//echo str_replace("^^^^", $vid, $tags);
     		echo "<option value=".$vid.">".$model."</option>"; 
	 } 
              	
	?>
	</select>
	<input type="submit" name="" value="GO!!">
	<?php 
	   $products = $_POST["products"];
	   //echo "<br>is:".$products;

	   echo "<br>" . str_replace("^^^^", $products, $tags); ?>
    </form>

</body>
</html>