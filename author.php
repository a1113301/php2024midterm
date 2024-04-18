<form method=post action="showpaper.php">
<?php
session_start();
if(@$_SESSION["login"]!="yes"){
    echo "<h1>非法進入，請先登入。2秒後離開...</h1>";
    header("Refresh:2 url=login.php");
}elseif($_SESSION["login"]!="yes"||$_SESSION["type"]!="author"){
    header("location:check.php");
}else{
    echo "<h1>author您好，歡迎進入論文投稿網頁</h1>";
    echo"論文標題: <input type='text' name='stitle'><br/>
    作者姓名: <input type='text' name='sname><br/>
    作者email: <input type='text' name='semail'><br/>";
    echo"論文摘要: 
    <textarea name='sComment'rows='10' cols='40'>
    </textarea><br/>";
    echo"<input type='submit'value='提交'></br>";

    echo "你可以<a href='logout.php'>點此</a>登出!"; 
}

?>