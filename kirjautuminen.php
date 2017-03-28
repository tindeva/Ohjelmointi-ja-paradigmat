<html>
<body>

<?php
 //Kun nimi kenttä on tyhjä pyydetään kirjoittamaan nimi ja salasana
if (empty($_POST['nimi']))
 {echo "Kirjoita nimi ja oikea salasana";
 
?>

 <br>
 Nimi:
     <br>
       <form action="kirjautuminen_session.php" method="post">
         <input type="string" name="nimi" required/><br>
 Salasana (1234):
         <br>
         <input type="string" name="salasana" required/><br>
           <br>
           <input type="submit" name="Kirjaudu" value="Kirjaudu."/>
       </form>
<?php
//Jos salasanaa ei ole kirjoitettu oiken, pyydetään täyttämään tiedot oikein
}elseif ($_POST['salasana'] != "1234")
  {echo "Väärä salasana";
?>
    <br>
     <br>
     Nimi:
         <br>
           <form action="kirjauduttu_session.php" method="post">
             <input type="string" name="nimi" required/><br>
     Salasana (kissa):
             <br>
             <input type="string" name="salasana" required/><br>
               <br>
               <input type="submit" name="Kirjaudu" value="Kirjaudu."/>
           </form>
 <?php
} else{
  echo "Tervetuloa ".($_POST['nimi']." !");

}
session_start();
//määritetään istuntomuuttujat
$_SESSION["nimi"] = $_POST["nimi"];
$_SESSION["salasana"] = $_POST["salasana"];
  ?>
    
    </body>
   </html>
