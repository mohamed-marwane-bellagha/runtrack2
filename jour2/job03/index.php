<?php
$finish=100 ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=0;$i<=$finish;$i++){
        if($i<=20){
            echo "<i>$i</i><br/>";
        }else if($i>=25 && $i<=50){
            echo "<u>$i</u><br/>";
                if($i==41){
                echo 'La Plateforme_<br/>';
                $i=$i+1;
                }
        }else{
            echo $i.'<br/>';}
    }
    ?>
</body>
</html>