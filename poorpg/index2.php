<?php 

session_start();
if(empty($_SESSION["nom"])){
$_SESSION["nom"] = $_POST["nom"];
}
if(empty($_SESSION["class"])){
$_SESSION["class"]=$_POST["class"];
}

require("Mage.php");
require("Archer.php");
require("Guerrier.php");

    if(isset($_POST["submit"]))
    {
        
    switch ($_SESSION['class']) {
        case 'Mage':
            $newAventurier = new Mage($_SESSION['nom'],$_SESSION['class']);
            $newAventurier->sayHello();
            $newAventurier->sayClass();
            break;
        case 'Archer':
            $newAventurier = new Archer($_SESSION['nom'],$_SESSION['class']);
            $newAventurier->sayHello();
            $newAventurier->sayClass();
            break;
        case 'Guerrier':
            $newAventurier = new Guerrier($_SESSION['nom'],$_SESSION['class']);
            $newAventurier->sayHello();
            $newAventurier->sayClass();
            break;
    }
    if(isset($_POST["prénom"])){

        $newAventurier->sayHello();
        echo "ca marche";
    }
    var_dump($_POST);
    
    }

    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Aventurier</title>
</head>
<body>
    <form method="POST" action="">
        <input name="Avance" type="submit" value="Avance">
        <input name="Attaque" type="submit" value="Attaque">
        <input name="prénom" type="submit" value="prénom">
    </form>
</form>
</body>
</html>
