<?php
$tabJour=[];
$tabMois=[];
$tabAnnee=[];
function affichlistJour()
{

    for($i=1; $i<=31; $i++)
    {
        $tabJour[$i]=$i;
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
}

function affichlistMois()
{
    for($i=0; $i<=12;  $i++)
    {
        $tabMois[$i]=$i;
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
}

function affichlistAnnee()
{

    for ($i=1900; $i<=2019; $i++)
    {
        $tabAnnee[$i]=$i;
        echo '<option value="'.$i.'">'.$i.'</option>';
    }
}

// Génération d'une chaine aléatoire
$nb_car=8;
function chaine_aleatoire($nb_car, $chaine = 'AZERTYUIOPQSDFGHJKLMWXCVBN123456789/*-+$^%!:;.')
{
    $nb_lettres = strlen($chaine) - 1;
    $generation = '';

    for($i=0; $i < $nb_car; $i++)
    {
        $pos = mt_rand(0, $nb_lettres);
        $car = $chaine[$pos];
        $generation .= $car;
    }

    return $generation;
}
function passwordRand ()
{
    $lettre="AZERTYUIOPQSDFGHJKLMWXCVBN";
    $lettreRand = substr($lettre, rand(0, strlen($lettre) - 1), 1);
    $carac="/*-+$!:;.,?";
    $caracRand = substr($carac, rand(0, strlen($carac) - 1), 1);
    $chiffre = '0123456789';
    $chiffreRand="";
    for ($i = 0; $i < 6; $i++) {
        $chiffreRand .= substr($chiffre, rand(0, strlen($chiffre) - 1), 1);
    }
    $passwordP=$chiffreRand.$caracRand.$lettreRand;
    $password=str_shuffle($passwordP);
    return $password;

}

