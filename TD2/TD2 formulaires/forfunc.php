<?php


    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $jour = $_GET['jour'];
    $mois = $_GET['mois'];
    $annee = $_GET['annee'];
    $sexe = $_GET['sexe'];
    $adresse = $_GET['adresse'];
    $cp = $_GET['cp'];
    $ville = $_GET['ville'];
    $mail=$nom.'.'.$prenom.'@php.fr';

 if(is_numeric($nom)===true)
 {
 echo "Un nom c'est des lettres boubourse !";
 echo '<br>';
}
if(is_numeric($prenom)===true)
{
    echo "Un nom c'est des lettres boubourse !";
    echo '<br>';
}
if(is_numeric($cp)!==true)
{
    echo "Un cp c'est des chiffres boubourse !";
    echo '<br>';
}



    $d1 = new DateTime("$annee-$mois-$jour");
    $d2 = new DateTime("now");
    $dd = date_diff($d1, $d2);

    echo "Bonjour $prenom $nom, vous avez ", $dd->format("%y ans"), " vous êtes un $sexe.";
    echo '<br>';
    echo "Vous habitez au $adresse $cp $ville.";
    echo '<br>';

    echo $mail;
echo '<br>';echo '<br>';

    include ('formcontrol.php');
    echo "Votre mot de passe provisoire est : ", passwordRand ();




