<?php 
$str="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$i=0;
while(isset($str[$i])){
    if($i%2==0){
        echo ' ';
     
    }else{
        echo $str[$i];
       
    }
$i=$i+1;
}
echo $str[4]
?>