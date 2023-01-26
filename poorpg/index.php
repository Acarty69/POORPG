<?php
session_start();
if (empty($_SESSION["nom"])) {
    $_SESSION["nom"] = $_POST["nom"];
    $_SESSION["class"] = $_POST['class'];
}


require("Mage.php");
require("Archer.php");
require("Guerrier.php");

if (isset($_POST["submit"])) {
    if (isset($_POST['class'])) {
        switch ($_POST['class']) {
            case 'Mage':
                $newAventurier = new Mage($_SESSION["nom"], $_SESSION["class"]);
                $newAventurier->sayHello();
                $newAventurier->sayClass();
                break;
            case 'Archer':
                $newAventurier = new Archer($_SESSION["nom"], $_SESSION["class"]);
                $newAventurier->sayHello();
                $newAventurier->sayClass();
                break;
            case 'Guerrier':
                $newAventurier = new Guerrier($_SESSION["nom"], $_SESSION["class"]);
                $newAventurier->sayHello();
                $newAventurier->sayClass();
                break;
        }
    }
    if (isset($_POST["avance"])) {

        $newAventurier->avance();
        echo "ca marche";
    }
    if (isset($_POST["supprime"])) {

        session_destroy();
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
    <form method="post" action="index.php">
        <input name="nom" type="text" placeholder="ton nom ?">
        <select name="class">
            <option value="Mage">Mage</option>
            <option value="Guerrier">Guerrier</option>
            <option value="Archer">Archer</option>
        </select>
        <button name="avance" type="submit">Avance</button>
        <button name="submit" type="submit">J'ai finsi</button>
        <button name="supprime" type="submit">Je veux supprimer mon perso</button>
    </form>
</body>

</html>