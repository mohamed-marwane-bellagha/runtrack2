<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="GET">
<label for="largeur">Largeur</label>
<input type="text" id="largeur" name="largeur">
<label for="hauteur">Hauteur</label>
<input type="text" id="hauteur" name="hauteur">
<input type="submit">
</form>
<?php
$largeur=0;
$hauteur=0;
foreach($_GET as $key=>$value){
    if($key=="largeur"){
        $largeur=$value;
          
    }
    else if($key=="hauteur"){
        $hauteur=$value;
}}
// echo "/\<br/>";    
// for($h=0;$h<$largeur;$h++){
//     echo "/";
    $n=$largeur;
    $k = 2 * $n - 2;
    for ($i = -1; $i < $n; $i++) 
    {;
        for ($j = 0; $j < $k; $j++) 
        echo "&nbsp";
        $k = $k - 1;
        echo "/";
        for ($j = 0; $j <= $i; $j++ )
    {echo "_";}     
            echo "\</br>";}
    for($h=0;$h<$hauteur;$h++){
        for($w=0;$w<=$k;$w++){
            echo "&nbsp";
        }
        echo "|";
        for($i=0;$i<$largeur;$i++){
            echo "&nbsp";
            // echo $i;
            }
        echo "|</br>";    
    }
    






?>
    
</body>
</html>