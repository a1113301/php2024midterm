
<?php
session_start();
$ac1="chair";
$pd1="123";
$ac2="reviewer";
$pd2="234";
$ac3="author";
$pd3="345";
@$ac=$_POST["account"];
@$pd=$_POST["password"];
if(($ac==$ac1&&$pd==$pd1)||@$_SESSION["type"]=="chair"){
    $_SESSION["login"]="yes";
    $_SESSION["type"]="chair";
    setcookie("name",$ac1,time()+86400*7);
    header("Location:chair.php");
}elseif($ac==$ac2&&$pd==$pd2||@$_SESSION["type"]=="reviewer"){
    $_SESSION["login"]="yes";
    $_SESSION["type"]="reviewer";
    setcookie("name",$ac2,time()+86400*7);
    header("Location:reviewer.php");
}
elseif($ac==$ac2&&$pd==$pd3||@$_SESSION["type"]=="author"){
    $_SESSION["login"]="yes";
    $_SESSION["type"]="author";
    setcookie("name",$ac2,time()+86400*7);
    header("Location:author.php");
}
else{
    echo "帳密輸入錯誤<br/>2秒後回到首頁重新輸入帳號密碼";
    header("Refresh:2 url=index.php");
}
?>