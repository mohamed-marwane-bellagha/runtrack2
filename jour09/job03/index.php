<table>
    <?php
    $db=mysqli_connect('localhost','root','L@Platef0rme','jour08');
    $req="SELECT nom,prenom,naissance FROM `etudiants` WHERE sexe LIKE '%Femme%'";
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