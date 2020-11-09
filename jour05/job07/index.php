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
;

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
//gras("Céci est une Chaine de");

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
                ;
            }
        }}
        for($i=0;isset($str[$i]);$i++){
            for($k=0;isset($lower[$k]);$k++){
            if($str[$i]==$lower[$k]){
               // echo $str[$i]." ".$lower[$k];
                $indice2=$k+$decalage;
                /*echo "k".$k;
                echo "<br/>";
                echo "deca".$decalage;
                echo "<br/>";
                echo "ind".$indice2;
                echo "<br/>";*/
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


?>
</html>