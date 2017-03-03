
<?php

$randomNum = (rand(1,10));


if(isset($_POST['myGuess'])) {
    $myGuess = $_POST['myGuess'];
 
       if($myGuess > $randomNum){
        echo "Arvauksesi on liian korkea!";
    } else if ($myGuess < $randomNum){
        echo "Arvauksesi on liian vähäinen";
        
    } else if ($myGuess == $randomNum) {
        echo "Hienoa! Arvasit oikein";
    } 
}
?>
<!DOCTYPE html>
<html>

<header>
<style>
#wrapper {
height: 450px; width: 550px; background-color: lightkcyan; color: white;"
}
.box {
    background-color: darkcyan;
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
    <div class="box"><p> Mitä numeroa ajattelen?
    <?php echo $lower; 
    ?>
    and
    <?php echo $higher; 
    ?>
    .</p><br>
    <form action="numerot.php" method="POST">
        <input type="hidden" name="lower" value="<?php echo $lower ?>">
        <input type="hidden" name="higher" value="<?php echo $higher ?>">
        <input type="text" name="myGuess" class="inputs"><br>
        <input type="submit" class="inputs" value="GUESS!"><br>
    </form>
    </div>
</div>
</body>
</html>