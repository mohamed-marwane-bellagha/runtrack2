<?php
function occurrences($str,$char){
    $c=0;
    for($i=0;isset($str[$i]);$i++){
        if(strtolower($str[$i])==$char){
            $c=$c+1;
        }
}
    return $c;
}
$var=occurrences("Thierry Pina Colada","a");
echo $var;

?>