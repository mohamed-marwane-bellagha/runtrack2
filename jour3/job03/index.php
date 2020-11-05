<?php 
$str="I'm sorry Dave I'm afraid I can't do that";
$i=0;
while(isset($str[$i])){
    if($str[$i]=="a"||$str[$i]=="o"||$str[$i]=="u"||$str[$i]=="i"||$str[$i]=="y"||$str[$i]=="e"){
        echo $str[$i];
    }
    $i=$i+1;
}

?>