<table>
    <?php
    $db=mysqli_connect('localhost','root','L@Platef0rme','jour08');
    $req="SELECT * FROM `salles` ORDER BY capacite DESC ";
    $query=mysqli_query($db,$req);
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