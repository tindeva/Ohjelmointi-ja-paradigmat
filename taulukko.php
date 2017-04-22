<!DOCTYPE html>
<html><head>
    Asiakkaat
    </head>
<body>


<?php
//yhteys tietokantaan
$mysql_yhteys = 
mysqli_connect ("", "okp", "oli9tRR3", "tiinav");

if (mysqli_connect_errno()){
    echo "Yhteysvirhe tietokantaan" . mysqli_connect_error();
}

$sqlkom="select id, etunimi, sukunimi from Asiakas order by id";
$hakutulos=mysqli_query ($mysql_yhteys, $sqlkom);

//kyselyn tulokset taulussa
echo "<table border=1><tr>
    <th>id</th>
    <th>etunimi</th>
    <th>sukunimi</th<
    </tr>";

    while($rivi=mysqli_fetch_array($hakutulos))
    {
    echo "<tr><td>" . $rivi["id"] . "</td>";

echo "<td>" . $rivi["etunimi"] . "</td>";

echo "<td>" . $rivi["sukunimi"] . "</td></tr>";
    }
 
echo"</table>";

mysqli_close($mysql_yhteys);
?>
    
    </body>
</html>
