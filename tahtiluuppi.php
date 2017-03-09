<html>
<header>
</header>
<body>
 <body style="background-color:lightblue;">
 Tähtitulostin! Jee!
      <br>
        <form action="tahtiluuppi.php" method="post">
            <input type="number" name="maara" required/><br>
            <br>
            <input type="submit" name="submit" value="Let it Go!"/>
        </form>

<?php
$maara = $_POST["maara"];
for($value=1;$value<=$maara;$value++)
{
for($rivi=1;$rivi<=$value;$rivi++)
{
echo "* ";
}
echo "<br>";
}
?>
</body>
</html>
