

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styleTD4.css">
</head>
<body>
<style> td{ba</style>
<?php
include ('td4f.php');
/*$tablo=["nom" => "Noé",
    "prenom"=> "Antoine",
    "notes" => [7,12,15,6,18]];

var_dump($tablo);

echo "La moyenne est de : ".moyenne($tablo);

echo "<br>";

echo meilleurNote($tablo);
echo "<br>";echo "<br>";

echo "l'éléve ".$tablo["nom"].' '.$tablo["prenom"].' a obtenu la moyenne de '.moyenne($tablo).' .Sa meilleure note est '.meilleurNote($tablo).'.';

sort($tablo["notes"]);

var_dump($tablo);
*/


/*EX2*/

$tablo2=["eleves1"=>["nom" => "Noé",
                    "prenom"=> "Antoine",
                    "notes" => [7,12,15,6,18]],
        "eleves2"=>["nom" => "Rachida",
                    "prenom"=> "Dati",
                    "notes" => [11,10,13,16,12]],
        "eleves3"=>["nom" => "Tonton",
                    "prenom"=> "Peter",
                    "notes" => [15,17,18,16,18]]];


tabloblo($tablo2);
tabloblo2($tablo2);




/*var_dump($tablo2);
echo "<br>";echo "<br>";

/*EX3*/
echo "<br>";echo "<br>";
$min=1;
$max=1000;




for($i=0; $i<10; $i++){
    $nb3=rand($min, $max);
    $nb4=rand($min, $max);
    Calcul($nb3, $nb4, RandomO());
   /* echo lancement($nb3, $nb4);*/
    echo "<br>";
    }
echo "<br>";echo "<br>";
?>
</body>
</html>