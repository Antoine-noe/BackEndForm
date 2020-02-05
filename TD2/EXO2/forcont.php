<?php
include ('Fonctions.php');



$saisie=$_GET['nbverbe'];
$chaineCarac=$_GET['verbe'];


if(checkedNumber($saisie)===FALSE)
{
    echo "Saisir un nombre entre 1 et 10.";
}

if(checkedString ($chaineCarac)===FALSE)
{
    echo "Retirez les espaces";
}

