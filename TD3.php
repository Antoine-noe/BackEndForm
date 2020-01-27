<?php
/*EX1*/
date_default_timezone_set('Europe/Paris');
$date1 = date('Y/m/d');
$date = utf8_encode(strftime("%d/%m/%Y", strtotime($date1)));
$heure= date("H:i:s");



echo 'Nous sommes le : '.$date.'.';
echo '<br>';
echo 'il est : '.$heure.'.';
echo '<br>';echo '<br>';

/*EX2*/

echo 'Timestamp actuel : ' .time(). '<br>';
echo '<br>';echo '<br>';

/*EX3*/

echo date ("d/m/Y H:i:s", time());

echo '<br>';echo '<br>';
/*EX4*/
setlocale(LC_TIME, 'FRA');  //correction problème pour windows
$format_jour = '%#d';
echo "Nous sommes le ".strftime("%A $format_jour %B %Y").'.';
echo '<br>';echo '<br>';
/*EX5*/

$result = checkdate(02, 29, 2000);

if( $result === true )
{
    echo 'la date est valide';
}
else
{
    echo 'la date n\'est pas valide';
}
echo '<br>';echo '<br>';

/*EX6*/

$d1 = new DateTime('2000-02-01 00:00:00');
$d2 = new DateTime("now");

$dd= date_diff($d1,$d2);
echo $dd->format("%y années %m mois %d jours %h heures %i minutes %s secondes");