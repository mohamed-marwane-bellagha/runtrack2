<?php
$start=0;
$finish=167 ;
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
$nombre = 0;
while ($nombre <= 1000)
{
    $nombre_verification = 1;
    $multiple= 0;
     
    while ($nombre_verification <= $nombre)
     {
        if($nombre % $nombre_verification == 0)
        {
        $multiple++;
        }

        $nombre_verification ++;
     }

      if ($multiple == 2)
      echo $nombre. '<br>';

    $nombre++;


}
?>
<?php
$start=0;
$finish=167 ;
?>

    <!-- <?php
    for($i=0;$i<=$finish;$i++){
        $prime=gmp_nextprime($start);
        $start=$prime;
        echo "$start</br>";
        }
    ?> -->
</body>
</html>
</body>
</html>