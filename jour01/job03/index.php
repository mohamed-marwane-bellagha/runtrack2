<table>
<th>Valeur</th>
<th>Type</th>
<th>Nom</th>
<?php 
$myBool=true;
$myNum=8;
$myStr="Hello";
$myFloat=3.14;

echo "<tr>";
echo "<td>";
echo $myBool;
echo "<td/>";
echo gettype($myBool);
echo "<td>";
echo "myBool";
echo "<td/>";
echo "<tr/>";
echo "<tr>";
echo "<td>";
echo $myNum;
echo "<td/>";
echo gettype($myNum);
echo "<td>";
echo "myNum";
echo "<td/>";
echo "<tr/>";
echo "<tr>";
echo "<td>";
echo $myStr;
echo "<td/>";
echo gettype($myStr);
echo "<td>";
echo "myStr";
echo "<td/>";
echo "<tr/>";
echo "<tr>";
echo "<td>";
echo $myFloat;
echo "<td/>";
echo gettype($myFloat);
echo "<td>";
echo "myFloat";
echo "<td/>";
echo "<tr/>";
?>
</table>