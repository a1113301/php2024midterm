<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    if(@$_SESSION["login"]=="yes"){
        session_destroy();
        header("Location:index.php");
    }
?>
<form method=post action="check.php">
<?php
if(isset($_cookie["name"])){
    echo"<h1>高大資管論文投稿系統<h1>";
    echo"請選擇你的角色:<select name='sselect'>
    <option selected>chair
    <option>reviewer
    <option>author</select>";
    echo"<br/><br/><br/>";
    echo"帳號:<input type='text'value='".$_cookie["name"]."'name='account'<br/> 
    密碼:<input type='text'name='password'><br/>";
    
}else{
    echo"<h1>高大資管論文投稿系統<h1>";
    echo"請選擇你的角色:<select name='sselect'>
    <option selected>chair
    <option>reviewer
    <option>author</select>";
    echo"<br/><br/><br/>";
    echo"帳號:<input type='text'name='account'<br/>
    密碼:<input type='text'name='password'><br/>";
}
?>
<input type="submit"value="登入"><input type="reset">
</form>
</body>
</html>