<?php

include('fonc.php');

    $pwd = $_GET['pwd2'];

$monfichier=fopen('txt.txt', 'r+');
$comparaison=fgets($monfichier);
fclose($monfichier);


if(PWD ($pwd, $comparaison)!==TRUE)
{
    echo 'Password incorrect';
    echo '<br>';

}else{
    echo 'Password correct';
    echo '<br>';
}




