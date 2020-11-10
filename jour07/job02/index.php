<?php

if(isset($_COOKIE["nbvisites"])){
    setcookie("nbvisites",$_COOKIE["nbvisites"]+1);
}else{
    unset($_COOKIE["nbvisites"]);
    setcookie("nbvisites",0);
}
foreach($_POST as $key=>$value){
    $value=0;
    $_COOKIE["nbvisites"]=$value;

}
echo ($_COOKIE["nbvisites"]);


?>
<form action="index.php" method="post">
    <input type="submit" value="Reset" id="nbvisites" name="nbvisites">
</form>
