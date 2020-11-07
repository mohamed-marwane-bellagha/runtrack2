<?php
function calcule($a,$operation,$b){;
    if($operation=="+"){
        return $a+$b;
    }elseif ($operation=="*"){
        return $a*$b;
    }elseif($operation=="-"){
        return $a-$b;
    }elseif ($operation=="/"){
        return $a/$b;
    }elseif ($operation=="%"){
        return $a%$b;
    }
}
$var= calcule(3,"/",5);
echo $var
?>