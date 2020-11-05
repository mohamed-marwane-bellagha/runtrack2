<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$i=0;
foreach($_GET as $arg){
    $i=$i+1;
}
echo $i;
?>
</form>
</body>
</html>
