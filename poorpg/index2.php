<?php

session_start();
if (empty($_SESSION["nom"])) {
    $_SESSION["nom"] = $_POST["nom"];
}
if (empty($_SESSION["class"])) {
    $_SESSION["class"] = $_POST["class"];
}



if (isset($_POST["prénom"])) {

    $newAventurier->avance();
    echo "ca marche";
}
var_dump($_POST);





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