<?php
if(isset($_GET['prenom'])){
    session_start();
    setcookie( "prenom",$_GET['prenom'],time()+10);
    echo "Bonjour ".$_COOKIE['prenom'];
    echo '<form action="index.php" method="post">';
    echo '<input type="submit" name="submit">';
    if(isset($_POST)){
        session_destroy();
        unset($_COOKIE['prenom']);
    }

}else{
    echo '<form action="index.php" method="get">';
    echo '<input type="text" name="prenom" id="prenom">';
    echo '<input type="submit" name="connexion" id="connexion">';
    echo '</form>';
}



?>

