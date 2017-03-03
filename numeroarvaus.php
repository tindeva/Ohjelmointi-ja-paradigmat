<?php
 
session_start();
 
if(isset($_SESSION['number']))
{
   $number = $_SESSION['number'];
}
else
{
   $_SESSION['number'] = rand(1,10);
}
 
 
if(isset($_POST["guess"])){
	if($_POST["guess"]){
	    $guess  = htmlspecialchars($_POST['guess']);
 
		echo $guess . "<br />";
	    if ($guess != $number)
		{ 
	        echo "Arvauksesi on väärin";
	    }
		elseif($guess == $number)
		{
	        echo "Arvasit oikein";
	    }
	} 
}
?>
 
<!DOCTYPE html>
<html>

<header>
<style>
#wrapper {
height: 450px; width: 550px; background-color: lightgray; color: white;"
}
.box {
    background-color:40A7C9;
    height: 400px;
    width: 500px;
    margin-top: 25px;
    margin-left: 25px;
    position: absolute;
}
p {
    margin-left: 25px;
    margin-top: 25px;
}
.inputs {
    margin-top: 15px;
    margin-left: 40px;
}
</style>
</header>

<body>
<div id="wrapper">
    <div class="box"><p> Ajattelen numeroa
    <?php echo $lower; 
    ?>
    and
    <?php echo $higher; 
    ?>
    .</p><br>
    <form action="numeroarvaus.php" method="POST">
        <input type="hidden" name="lower" value="<?php echo $lower ?>">
        <input type="hidden" name="higher" value="<?php echo $higher ?>">
        <input type="text" name="quess" class="inputs"><br>
        <input type="submit" class="inputs" value="GUESS!"><br>
    </form>
    </div>
</div>
</body>
</html>