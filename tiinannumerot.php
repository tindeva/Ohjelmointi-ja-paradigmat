
<html lang="fi">
<?php

$randomNum = 23;


if(isset($_POST['myGuess'])) {
    $myGuess = $_POST['myGuess'];
    $higher = "";
    $lower = "";

    if($myGuess > $randomNum){
        echo "Arvauksesi on liian korkea!";
        $higher = $_POST['myGuess'];
        $lower = $_POST['lower'];
    } else if ($myGuess < $randomNum){
        echo "Arvauksesi on liian vähäinen";
        $lower = $_POST['myGuess'];
        $higher = $_POST['higher'];
    } else if ($myGuess === $randomNum) {
        echo "Hienoa! Arvasit oikein";
    } 
} else {
$lower = 1;
$higher = 10;
}

?>
<!DOCTYPE html>
<html>

<header>
<style>
#wrapper {
height: 450px; width: 550px; background-color: black; color: white;"
}
.box {
    background-color: gray;
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
    <form action="1to100.php" method="POST">
        <input type="hidden" name="lower" value="<?php echo $lower ?>">
        <input type="hidden" name="higher" value="<?php echo $higher ?>">
        <input type="text" name="myGuess" class="inputs"><br>
        <input type="submit" class="inputs" value="GUESS!"><br>
    </form>
    </div>
</div>
</body>
</html>