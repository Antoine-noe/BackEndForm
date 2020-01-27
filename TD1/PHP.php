<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
</body>

</html>

<?php

echo"ligne créer uniquement avec PHP";
echo"ligne créer avec PHP";

$url="http://php.net/manual/fr/langref.php";
$texte_du_lien="PHP DOC";
?>

<a href="<? echo $url; ?>"><? echo $texte_du_lien; ?></a>


<?php

/*EX1*/
echo"ligne créer uniquement avec PHP <br>";
echo"ligne créer avec PHP <br>";

$url="http://php.net/manual/fr/langref.php";
$texte_du_lien="DOC PHP";
echo '<a href="'.$url.'">'.$texte_du_lien.'</a> <br>';
echo "<br>";

/*EX2*/
$nom="Noé";
$prenom="Antoine";
$moi=$prenom." ".$nom;

echo $prenom;
echo" ";
echo $nom;

echo"<br>";

echo $moi;

echo"<br>";

echo $prenom." ".$nom;
echo "<br>";

/*EX3*/
echo"<br>";
$a=2.55;
$b=8;
$result=0;

$result=$a+$b;

echo $a." + ".$b." = ". $result;

echo "<br>";
echo gettype($a);
echo "<br>";
echo gettype($b);
echo "<br>";
echo gettype($result);
echo "<br>";

$result=$a*$b;
echo $a." x ".$b." = ". $result;

echo "<br>";
echo gettype($a);
echo "<br>";
echo gettype($b);
echo "<br>";
echo gettype($result);
echo "<br>";
echo "<br>";

/*EX4*/
$c=-6;
$d=966.658;
$z=0.0;

$z=$c;
$c=$d;
$d=$z;

echo $c." ".$d;
echo "<br>";
echo "<br>";

/*EX5*/
$prix=20;
$nombre=28;
$max=250;

echo $prix*$nombre;
echo "<br>";
if($max < ($prix*$nombre)) {
    echo "Vous n'avez pas assez d'argent, il vous manque :",($prix*$nombre)-$max," €";
}
echo "<br>";
echo "<br>";
/*EX6*/

$zup='hello';
$zob='hello';
$zod='hola';

if($zup===$zob)
{
    echo"Chaines identiques";
}else{
    echo"chaines differentes";
}

echo "<br>";
echo "<br>";

/*EX7*/
$multiplicateur=0;

while($multiplicateur<10){
for($i=0; $i<10; $i++)
{

    echo $multiplicateur." x ".$i." = ".$multiplicateur*$i."<br>";

}$multiplicateur++;
echo  "<br>";
}
echo "<br>";
echo "<br>";

/* EX8*/
function table($nbr, $nbr2)
{

    $table = '<table border="1">';
    for($b=0; $b<= $nbr2; $b++)
    {
        $table .= '<td>'.$b .'</td>';
    }
    for ($a=0; $a <= $nbr; $a++) {
        $table .= '<tr>'.'<td>'.$a.'</td>';
        for ($b=1; $b <= $nbr2; $b++) {
            $table .= '<td>'.$a*$b.'</td>';
        }
        $table .= '</tr>';

    }

    $table .= '</table>';
    return $table;
}

echo table(10, 10);


echo "<br>";
echo "<br>";
/*EX9*/

$tatablo=['50','800','10','7','10','10'];
$sommetab= array_sum($tatablo);
echo $sommetab;
echo "<br>";
echo array_sum($tatablo);
echo "<br>";
$nbtab=(count($tatablo));
echo "<br>";
echo $nbtab;
echo "<br>";
echo $sommetab/$nbtab;
$sommeex9=0.0;

echo "<br>";echo "<br>";

for($i=0; $i<$nbtab; $i++)
{
   if ($tatablo[$i]%2 === 0)
   {
       $sommeex9=$sommeex9+$tatablo[$i];
   }
}
echo "<br>";echo "<br>";
echo $sommeex9;
?>
