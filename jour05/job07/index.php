<html>
<form method="get" action="index.php">
    <label for="str">Str</label>
    <input type="text" id="str" name="str">
    <select id="fonction" name="fonction">
        <option>Gras</option>
        <option>Cesar</option>
        <option>plateforme</option>
    </select>
    <input type="submit">
</form>
<?php

foreach($_GET as $key=>$value){
    if($key=="str"){
        $string=$value;
    }elseif($key="fonction"){
        $fonction=$value;
    }
}
function gras($str){
    $alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for($i=0;isset($str[$i]);$i++){
        for($j=0; isset($alphabet[$j]) && isset($str[$i]);$j++){
            if($str[$i]==$alphabet[$j] && isset($str[$i])){
                echo "<b>";
                while(isset($str[$i]) && $str[$i]!=" "){
                    echo $str[$i];
                        $i++;
                }
                echo "</b>";
            }
            }
        if(!isset($alphabet[$j]) && isset($str[$i])){
            while( isset($str[$i])&&$str[$i]!=" "){
                echo $str[$i];
                $i++;
            }
            echo" ";
        }
    }
    }
function cesar($str, $decalage) {
    $upper="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lower="abcdefghijklmnopqrstuvwxyz";
    for($i=0;isset($str[$i]);$i++){
        for($j=0;isset($upper[$j]);$j++){
            if($str[$i]===$upper[$j]){
                $indice=$j+$decalage;
                if($indice>25){
                    $newindice=$indice%26;
                    $str[$i]=$upper[$newindice];
                    break;

                }else{
                    $str[$i]=$upper[$indice];
                    break;

                }

            }
        }}
        for($i=0;isset($str[$i]);$i++){
            for($k=0;isset($lower[$k]);$k++){
            if($str[$i]==$lower[$k]){
              $indice2=$k+$decalage;
               if($indice2>25){
                    $newindice2=$indice2%26;
                    $str[$i]=$lower[$newindice2];
                    break;
                }else{
                    $str[$i]=$lower[$indice2];
                    break;
                }

            }
        }
    }
    echo $str;}
function plateforme($str){
    for($i=0;isset($str[$i]);$i++){
        echo $str[$i];
        if($str[$i]=="m" && $str[$i+1]=="e"&& $str[$i+2]==" "){
            $fin=$str[$i+1];
            $space=$str[$i+2];
            echo "$fin"."_".$space;
            $i=$i+2;
        }

    }


}
if(isset($fonction)){
if($fonction=="Gras"){
    echo gras($string);
}elseif($fonction=="Cesar"){
    echo cesar($string,2);


}elseif($fonction=="plateforme"){
    echo plateforme($string);
}
}

?>
</html>