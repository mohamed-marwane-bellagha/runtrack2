<?php
function leetspeak($str){

    for ($i=0;isset($str[$i]);$i++){
        if(strtolower($str[$i])=="a"){
            $str[$i]=4;
        }elseif (strtolower($str[$i])=="b"){
            $str[$i]=8;
        }elseif (strtolower($str[$i])=="e"){
            $str[$i]=3;
        }elseif(strtolower($str[$i])=="g"){
            $str[$i]=6;
        }elseif (strtolower($str[$i])=="l"){
            $str[$i]=1;
        }elseif(strtolower($str[$i])=="s"){
            $str[$i]=5;
        }elseif(strtolower($str[$i])=="t"){
            $str[$i]=7;
        }
    }
return $str;
}

?>