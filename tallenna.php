<!DOCTYPE html>
<html>
<body>

<form action="tallenna.php" enctype="multipart/form-data" method="POST">
<input type="text" name="salasana">

<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
<input type="file" name="kuva" />
<input type="submit" name="submit" value="Upload" />

</form>
<?php

/* SIIRRÄ KUVAT */
if ($_POST[salasana] == "oikea") 
if(isset($_POST['submit'])) {
 // process the form data
 $tmp_file = $_FILES['kuva']['tmp_name'];
 $target_file = basename($_FILES['kuva']['name']);
 $upload_dir = "uploads";

 if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
   	echo "File uploaded successfully.";
   	$mysql_yhteys = mysqli_connect("", "okp", "oli9tRR3", "markus-okp");
	$query = "insert into kuvat (nimi, sijainti) values {\"$target_file\", \"$upload_dir\");";
	
	$result = mysqli_query($mysql_yhteys, $query)
        or die("Virhe: " . mysqli_error($mysql_yhteys));

	// mysqli_free_result($result);
	mysqli_close($mysql_yhteys);

 } else {
   echo $_FILES['kuva']['error'];
    echo "Väärä salasana!";
 }

}
/* NÄYTÄ KUVAT */

// aukaistaan tietokantayhteys
$mysql_yhteys = mysqli_connect("", "okp", "oli9tRR3", "tiinav");

// määritellään kysely
$query="select * from Kuvat order by id";
$result=mysqli_query ($mysql_yhteys, $query)
    or die ("Virhe: " .
    mysqli_error($mysql_yhteys));

//tulostetaan tulos
while ($rivi=mysqli_fetch_array($result))
{
  $kohde = $rivi["sijainti"] ."/" .
        $rivi["nimi"];
echo "<img src=\"$kohde\"> <br>";

 
}

  
mysqli_free_result($result);
mysqli_close($mysql_yhteys);


?>  

</body>
</html>