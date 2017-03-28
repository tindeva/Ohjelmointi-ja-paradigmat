<html>
<body>
<?php
 
  echo "Tervetuloa ".($_POST['nimi']." !");
  echo "<br />";
  echo "<br />";

session_start();
//määritetään istuntomuuttujat
$_SESSION["nimi"] = $_POST["nimi"];
$_SESSION["salasana"] = $_POST["salasana"];
  ?>
</body>
</html>