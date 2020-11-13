<?php
session_start();

foreach($_POST as $key=>$value){
    if ($key=="prenom"){
    $_SESSION['prenom'].=" ".$value;}
    elseif($key=="reset"){
        $_SESSION['prenom']="";
    }
}

echo $_SESSION["prenom"]
?>
<form action="index.php" method="post">
    <input type="text" id="prenom" name="prenom">
    <input type="submit" id="submit" value="Envoyer">
    <input type="submit" value="Reset" id="submit" name="reset">
</form>
