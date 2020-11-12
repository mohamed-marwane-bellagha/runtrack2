<table>
    <?php
    $db=mysqli_connect('localhost','root','L@Platef0rme','jour08');
    $req="SELECT AVG(capacite) FROM `salles` ";
    $query=mysqli_query($db,$req);
    $resultassoc=mysqli_fetch_assoc($query);
    foreach($resultassoc as $key=>$values){
        echo "<th>$key</th>";

    }
    echo "<tr>";
    foreach($resultassoc as $key=>$values){

        echo "<td>$values</td>";

    }
    echo "</tr>";
    ?>
</table>