<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
<label for="username">Username</label>
<input type="text" id="username" name="username">
<label for="password">Password</label>
<input type="password" id="password" name="password">
<input type="submit">
</form>
<?php
$usernamevalue="";
$passwordvalue="";
//echo $usernamevalue;
//print_r($_POST);
foreach($_POST as $key=>$value){
    if($key=="username"){
        $usernamevalue=$value;
    }
    else if($key=="password"){
        $passwordvalue=$value;
}    
}
if($usernamevalue=="John" && $passwordvalue=="Rambo"){
    echo "C'est pas ma guerre";
}else{
    echo "Votre pire cauchemar";
}
//echo $usernamevalue;


?>
</body>
</html>