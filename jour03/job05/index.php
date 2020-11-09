<html>
<table>
<?php 
$str="On n est pas le meilleur quand on le croit mais quand on le sait";
$dic=["Voyelles"=>0,"Consonnes"=>0];
$voyelles="aeouiy";
$consonnes="zrtpqsdfghjklmwxcvbn";
$i=0;


while(isset($str[$i])){
    for ($j=0;$j<strlen($voyelles);$j++){
        if ($str[$i]==$voyelles[$j] || $str[$i]==strtoupper($voyelles[$j])){
           $dic["Voyelles"]=$dic["Voyelles"]+1;
        }
    }
    
    $i=$i+1;
}
$i=0;

while(isset($str[$i])){
    for ($j=0;$j<strlen($consonnes);$j++){
            if ($str[$i]==$consonnes[$j]|| $str[$i]==strtoupper($consonnes[$j])){
                $dic["Consonnes"]=$dic["Consonnes"]+1;
            }
        }
        $i=$i+1;
} 
echo "<th>Voyelles</th>";
echo "<th>Consonnes</th>";
echo "<tr><td>".$dic["Voyelles"]."</td>"."<td>".$dic["Consonnes"]."</td></tr>";
?>
</table>
</html>