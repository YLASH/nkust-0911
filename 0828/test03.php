<!DOCTYPE html>
<html>
<head>
	<meta charset="uft-8">
	<title>Channal switch</title>
	<style type="text/css"> 
		body {background-color: #FDF0C4}
		button {background-color: #F7A992;border-radius: 10px;color:#4c364d;border: 2px solid #4c364d;padding: 12px;margin: 4px 2px;}
	</style>
</head>
<body>


<h2> Your Channals <h2>
<hr>

<?php
   
   $tags = "<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";


   $TV1 = array("民視新聞直播", "FTVN","XxJKnDLYZz4");
   $TV2 = array("公視台語台網路直播", "PTS","ihWafbJ_Ics");
   $TV3 = array("ABC News live","ABC","yy5YhuCAwPo");
   $TV4 = array("FRANCE 24 NEWS live","FRANCE 24","djXROrzZ9NI&feature");
   $TV5 = array("DW Deutsche Welle Live TV ","DW","pPgGsAcEEZI&feature");
   $TV6 = array("ANN JapaNews 24","ANN","coYw-eVU0Ks");

   $data = array($TV1, $TV2, $TV3, $TV4, $TV5, $TV6);

   //button 設定
   foreach ($data as $tv) {
   	 echo "<button><a href ='test03.php?v=".$tv[2]."&title=".$tv[0]."'> "
   	       . $tv[1]." </a></button>";

   }
   echo "<hr>";
   //網址內嵌
   $v = $_GET["v"] ;   //從網址取得v 
   $title = $_GET["title"];  
   if ($v==NULL) {$v ="ihWafbJ_Ics";
     	$title = "公視台語台網路直播";
      }
   
   echo "<h2>$title</h2>";
   echo str_replace("^^^^", $v, $tags);

?>
<hr>
~~copyright.~~

</body>
</html>
