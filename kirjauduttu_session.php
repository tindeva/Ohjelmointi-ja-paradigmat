
<?php
session_start();
 
$nimi = $_SESSION ["nimi"];
$salasana = $_SESSION ["salasana"];

 echo "Nimi: ".$nimi;
 echo "<br />".$salasana;
  ?>
