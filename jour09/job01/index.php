
<table>

<?php
$db=mysqli_connect('localhost','root','L@Platef0rme','jour08');
$query=mysqli_query($db,'select * from etudiants');
$resultassoc=mysqli_fetch_assoc($query);
$resultall=mysqli_fetch_all($query);
foreach($resultassoc as $key=>$values){
    echo "<th>$key</th>";

}
echo "<tr>";
foreach($resultassoc as $key=>$values){

    echo "<td>$values</td>";

}
echo "</tr>";

foreach($resultall as $key=>$values){
    echo "<tr>";
    foreach ($values as $key=>$values) {
        echo "<td>$values</td>";
    }
    echo "</tr>";}





?>
</table>
