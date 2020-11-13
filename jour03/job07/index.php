<?php 
$str="Certaines choses changent, et d'autres ne changeront jamais.";
$i=0;
for($i=0;isset($string[$i]);$i++){
        $str[$i]=$str[$i+1];
}
echo $str;

?>