<?php
    session_start();
    $username = $_SESSION["username"];
    if ($username ==NULL) {
      header("Location: login.php?redir=lotto.php");
      exit;
    }
    $tags= "<iframe width='600' height='350' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>產品比較</title>
</head>
<body>
	<h3>SONY compare</h3>

<form method="POST" action="compare3.php">
  <select name="camera">	

	<?php 
	//echo $tags;
       $c_list = array(
     array("type"=>"Sony_ZV-1J", "vid" => "HKqOWlqVilA"),
     array("type"=>"Sony_ZV-1A", "vid" => "mSm7Es2-Y6c" ),
     array("type"=>"Sony_a6400", "vid" => "HXND7eCkAZA" ), 
     array("type"=>"Sony_a6600", "vid" => "sXglAsCIEEk" )
     );
  
         for ($i=0; $i < count($c_list) ; $i++) { 
          echo "<option value=".$i.">".$c_list[$i]["type"]."</option>"; }
	?>

	</select>
	<input type="submit" name="" value="GO!!">

</form>
 <?php
       $camera = $_POST["camera"];
       //echo $camera ; 0,1,2,3
       echo "Type :".$c_list[$camera]["type"] . "<br>" ;
       $VID = $c_list[$camera]["vid"] ;
       echo str_replace("^^^^", $VID, $tags);
 ?>
</body>
</html>