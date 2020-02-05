<?php
$prenom = $_GET['prenom'];
$nom = $_GET['nom'];


$monfichier=fopen('txt.txt', 'r+');
$ma_chaine=$prenom.' '.$nom;
fputs($monfichier, $ma_chaine);
fclose($monfichier);


$monfichier=fopen('txt.txt', 'r+');
$ligne=fgets($monfichier);
fclose($monfichier);


echo $ligne;


