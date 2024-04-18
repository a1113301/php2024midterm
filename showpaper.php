<meta charest="utf-8">
<?php
session_start();
if($_POST["stitle"]!=""){
    @$scheck=$_POST["stitle"];
    echo "標題: " .@$stitle. "<br/>";
    @$sname=$_POST["sname"];
    echo "論文姓名: " .@$sname. "<br/>";    
    @$semail=$_POST["semail"];
    echo "電子郵件: " .@$semail. "<br/>";
    @$seomment=$_POST["seomment"];
    echo "論文摘要: " .@$seomment. "<br/>";
}
?>