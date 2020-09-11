<?php
    session_start();
    $username = $_SESSION["username"];
    if ($username ==NULL) {
      header("Location: login.php?redir=lotto.php");
      exit;
    }
    $tags= "<iframe width='300' height='175' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>產品比較</title>
</head>
<body>
	<h3>SONY compare</h3>

<form method="POST" action="compare2.php">
  <select name="camera">	

	<?php 
	//echo $tags;
       $list= array(
      "C1" => array("type"=>"Sony_ZV-1J", "vid" => "HKqOWlqVilA"),
      "C2" => array("type"=>"Sony_ZV-1A", "vid" => "mSm7Es2-Y6c"),
      "C3" =>array("type"=>"Sony_a6400", "vid" => "HXND7eCkAZA" ),  
      "C4" =>array("type"=>"Sony_a6600", "vid" => "sXglAsCIEEk" ),
  );
         foreach ($list as $l ) {
          echo "<option value=".$l["vid"].">".$l["type"]."</option>"; }

	?>

	</select>
	<input type="submit" name="" value="GO!!">

</form>
 <?php
       $camera = $_POST["camera"];
       //echo $camera ; 0,1,2,3
       echo "代不出所選type". $camera ;
       echo str_replace("^^^^", $camera , $tags);
 ?>
</body>
</html>