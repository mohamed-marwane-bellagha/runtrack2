<?php
session_start();
foreach($_POST as $key=>$value){
    $value=0;
    $_SESSION['nbvisites']=$value;

}
echo $_SESSION['nbvisites'];
if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']=$_SESSION['nbvisites']+1;
}else{
    $_SESSION['nbvisites']=0;
}

?>
<form action="index.php" method="post">
    <input type="submit" value="Reset" id="nbvisites" name="nbvisites">
</form>
