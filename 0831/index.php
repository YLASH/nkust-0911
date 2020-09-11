<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>YiLin PHP 0831</title>
	<style type="text/css">
		body {background-color: #FCFDBC;color: #774836; }
		button{background-color: #FDF0C4;color: #41354D;margin: 4px 2px;padding: 10px;}
	</style>


</head>
<body>
	<h3><center>YiLin PHP Practicing web</center></h3>
	<hr>
	   <?php include 'menu.php'; ?> 
	<hr>
	<?php
	$username = $_SESSION["username"];
	$email = $_SESSION["email"];
	//檢查$username的內容以決定瀏覽者的身分
	if ($username!=NULL) {
		echo "你的帳號:" . $username ."<br>".
	         "電子郵件:". $email . "<br>";
	} else {
		echo "<b><marquee direction='right' height='30' scrollamount='8' behavior= 'alternate'>~~歡迎親愛的訪客,請登入以檢視更多訊息~~!</marquee><br></b>";
	}
	 echo "<br><br><hr>";
	 //頁尾
	 include "footer.php";
	
	?>

</body>
</html>