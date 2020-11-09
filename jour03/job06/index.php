<?php
$str="Les choses que l'on possede finissent par nous posseder.";
$i=0;

while(isset($str[$i])){
$i=$i+1;
}
while($i>0){
    $i=$i-1;
    echo $str[$i];
    }



?>