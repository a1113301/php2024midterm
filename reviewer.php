<form method=post action="showreviewer.php">
<?php
session_start();
if(@$_SESSION["login"]!="yes"){
    echo "<h1>非法進入，請先登入。2秒後離開...</h1>";
    header("Refresh:2 url=index.php");
}elseif($_SESSION["login"]!="yes"||$_SESSION["type"]!="reviewer"){
    header("location:check.php");
}else{
    echo "<h1>reviewer您好，歡迎進入論文評論網頁</h1>";
    echo"論文評審決定: <br/>
    <input type='radio' name='scheck' checked>accept
    <input type='radio' name='scheck' >minor revision
    <input type='radio' name='scheck' >major revision
    <input type='radio' name='scheck' >reject<br/>
    <br/>";
    echo"提交論文評語: 
    <textarea name='sComment'rows='10' cols='40'>
    </textarea><br/>";
    echo"<input type='submit'value='提交'></br>";

    echo "你可以<a href='logout.php'>點此</a>登出!"; 
}
?>