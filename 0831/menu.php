<?php
     session_start();
     $username = $_SESSION["username"];
     $link_homepage = "<button><a href='index.php'>Homepage</a></button>";
     $link_login = "<button><a href='login.php'>SING-IN</a></button>";
     $link_lotto = "<button><a href='lotto.php'>Lotto 預測</a></button>";
     $link_compare = "<button><a href='compare3.php'>產品比較</a></button>";
     $link_logout = "<button><a href='logout.php'>SIG-OUT</a></button>";
     

     echo $link_homepage;
     if ($username==NULL) {   //如果是訪客,要執行這邊
     	echo $link_login;
     } else {                 //如果是會員,要執行這邊
     	echo $link_lotto;
          echo $link_compare;
     	echo $link_logout;
     }

?>            
