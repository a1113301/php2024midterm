<?php
    session_start();
    echo "即將登出<br/>2秒後回到首頁重新輸入帳號密碼";
    header("Refresh:2 url=index.php");
?>