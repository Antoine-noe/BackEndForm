<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php


if (isset($_GET['nom'], $_GET['formation'], $_GET['heure'])) {


    $nom = $_GET['nom'];
    $formation = $_GET['formation'];
    $heures = $_GET['heure'];
    $i = 0;


    if (empty($nom) === TRUE) {
        echo "nom vide." . '<br>';
    } else {
        $i++;
    }
    if (empty($formation) === TRUE) {
        echo "formation vide." . '<br>';
    } else {
        $i++;
    }
    if (empty($heures) === TRUE) {
        echo "Heures vides." . '<br>';
    } else {
        $i++;
    }if($i===3){
    echo "$nom a choisi la spécialité $formation pour une durée de $heures heures";}}
?>


</body>
</html>
