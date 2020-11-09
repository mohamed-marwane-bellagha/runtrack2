<?php 
$str="Certaines choses changent, et d'autres ne changeront jamais.";
$i=0;
while(isset($string[$i])){
    if($i>0){
        $str[$i]=$str[$i+1];
    }
    $i=$i+1;
}
echo $str

?>