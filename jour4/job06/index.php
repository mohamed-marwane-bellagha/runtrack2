<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="GET">
<label for="number">Number</label>
<input type="text" id="number" name="number">
<input type="submit">
</form>
<?php
    foreach($_GET as $key=>$value){
        if($value %2==0)
        {
            echo "Nombre est pair";
        }           
        else
        {
            echo "Nombre est impair";
        } 
    }
?>
</body>
</html>