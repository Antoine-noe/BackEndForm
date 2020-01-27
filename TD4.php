

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styletd4.css">
</head>
<body>
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
                    "notes" => [1,0,3,6,2]],
        "eleves3"=>["nom" => "Tonton",
                    "prenom"=> "Hitler",
                    "notes" => [15,17,18,16,18]]];


tabloblo($tablo2);




/*var_dump($tablo2);
echo "<br>";echo "<br>";

/*EX3
$min=0;
$max=1000;



for($i=0; $i<10; $i++){
$resul= Calcul($nb1, $nb2, $operateur);
    echo $resul.'<br>';}
echo "<br>";echo "<br>";*/
?>
</body>
</html>