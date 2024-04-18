<?php
session_start();
if(@$_SESSION["login"]!="yes"){
    echo "<h1>非法進入，請先登入。2秒後離開...</h1>";
    header("Refresh:2 url=index.php");
}elseif($_SESSION["login"]!="yes"||$_SESSION["type"]!="chair"){
    header("location:check.php");
}else{
    echo "<h1>這裡是chair頁面</h1></br>";
    echo "你可以<a href='logout.php'>點此</a>登出!";
}
?>