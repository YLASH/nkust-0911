<?php 
    session_start();  //以下取得來自於表單的資料
    $redir = $_POST["redir"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($password=="1234") { //成功登入要處理的程式碼
    	$_SESSION["username"] = $username;  //session就好像是共同公佈欄用key ==>value的方式加註資料
    	//session["key:username"] <==value:$username ()
    	$_SESSION["email"] = $email;  
    	//$redir是來自於lotto.php?trdir=xxx.php
    	//它的目的是指引在表單完成之後,要前往的目標網頁
    	if ($redir!= NULL) {
    		//
    		header("Location: $redir");
    	} else{
    		header("Location: index.php");
    	}
    	exit;

    } else{                  //登入失敗要處理的程式碼 
    	echo "您的密碼輸入錯誤!! <br>";
    	echo "<a href='login.php'>回上一頁重新登入</a>";
    }


 
?>