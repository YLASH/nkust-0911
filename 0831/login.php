<?php
    $redir = $_GET["redir"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>YiLin PHP 0831</title>

</head>
<body>
	<h2>Sing in YiLin's web</h2>
	<hr>
	   <?php include "menu.php"; ?> 
	<hr>
	<form method=post action="chkpass.php">
		<table width=250 border="0">
	  <input type="hidden" name="redir" value=<?php echo $redir ?>>	
		<tr><td>
		登入帳號:</td><td><input type="text" name="username"><br></td></tr>
		<tr><td>
		電子郵件:</td><td><input type="text" name="email"><br></td></tr>
		<tr><td>
		登入密碼:</td><td><input type="password" name="password"><br></td></tr>
		<tr><td></td><td align=right colspan=2>
		<input type="submit" name="登入"></td></tr>

		</table>
		
	</form>
	<hr>
<?php
    include "footer.php";
?>
</body>


</html>