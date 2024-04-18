<meta charest="utf-8">
<?php

if($_POST["sComment"]!=""){
    $scheck=$_POST["scheck"];
    echo "論文評審決定: " .$scheck. "<br/>";
    $sComment=$_POST["sComment"];
    echo "論文評語: " .$sComment. "<br/>";    
}
?>