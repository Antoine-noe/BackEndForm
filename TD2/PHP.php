<?php
/*EX1*/
$chaineex1='abcdef';
$nbchaine=0;
$chaine2ex1='';

echo $chaineex1;
echo "<br>";
$nbchaine=strlen($chaineex1);
echo $nbchaine;
echo "<br>";




echo strrev($chaineex1);
echo "<br>";
echo $chaine2ex1;
echo "<br>";
/*EX2*/
$chaineex2='blablablA pOpP';
$chaineex2=strtolower($chaineex2);

$chaineex2=ucwords($chaineex2);
echo $chaineex2;
echo "<br>";echo "<br>";
/*EX3*/

$chaineex3='VoyOnS voiR CE que cA donnE';
$chaineex3=ucwords($chaineex3);
$tabex3=(explode(' ', $chaineex3));
$nbtab=(count($tabex3));
$chaineex32='';

for($i=0; $i<$nbtab; $i++)
{
    $chaineex32=$chaineex32.(substr($tabex3[$i], 0,1));
}

echo $chaineex32;
echo "<br>";echo "<br>";
/*EX4*/
$nbchaineex4=0;
$chaineex4='kl LKlKlklkA  OKA m';
$nbchaineex4=strlen($chaineex4);
if($nbchaineex4<6)
{
    echo "la chaine ne correspond pas aux critères de longueur» ";

}else{
    echo "la chaine correspond aux critères de longueur";
}
echo "<br>";echo "<br>";
/*EX5*/
$saisie='finir';
$nbCarac=strlen($saisie)-2;
echo $nbCarac;
$pronoms=['je', 'tu', 'il', 'nous', 'vous', 'ils'];
$present1=['e', 'es', 'e', 'ons', 'ez', 'ent'];
$present=['is', 'is', 'it', 'issons', 'issez', 'issent'];
$rest=substr($saisie, $nbCarac, 2);
$conj=substr($saisie, 0, $nbCarac);
$gpe1='er';



if($rest === $gpe1)
{
    echo "Verbe du premier groupe.";
    echo "<br>";
    for($i=0; $i<6; $i++)
    {
        echo $pronoms[$i].' '.$conj.$present1[$i];
        echo "<br>";

    }

}else{
    echo "Verbe du deuxiéme groupe.";
    echo "<br>";
    for($i=0 ; $i<6; $i++)
    {
        echo $pronoms[$i].' '.$conj.$present[$i];
        echo "<br>";
    }

}

/*EX6*/


$saisie2='jouer';
$nbCarac2=strlen($saisie2)-2;
$tab=["pronoms" => ['je', 'tu', 'il', 'nous', 'vous', 'ils'],
"present12" => ['e', 'es', 'e', 'ons', 'ez', 'ent'],
"present2" => ['is', 'is', 'it', 'issons', 'issez', 'issent']];
$rest2=substr($saisie2, $nbCarac2, 2);
$conj2=substr($saisie2, 0, $nbCarac2);
$gpe12='er';
echo "<br>";echo "<br>";
$i=0;
$affich='';

if($rest2 === $gpe12) {
    echo "Verbe du premier groupe.";
    echo "<br>";
    foreach($tab as $affich)
    {

       echo $affich.$conj2.[];
        echo "<br>";

    }

}else{
    echo "Verbe du deuxiéme groupe.";
    echo "<br>";
    foreach($pronoms2 as $conj2)
    {

        echo "$conj2 jou".$present2[$i];
        echo "<br>";
        $i++;
    }

}
/*EX7*/
$saisie=7;

echo "<br>";
if($saisie%2 === 0)
{
    echo $saisie." est paire.";
}else{
    echo $saisie." est impaire.";
}

/*EX8*/
$min=0;
$max=30;
$tabex8=[];
$j=0;
echo "<br>";


do{
    for($i=0; $i<3; $i++)
    {
        $tabex8[$i]=$alea=rand ($min , $max);
    }
    var_dump($tabex8);
    $j++;
}while(($tabex8[0]%2 !==0)||($tabex8[1]%2 ===0)||($tabex8[2]%2 ===0));
echo "resultat obtenu en :".$j." fois.";
echo "<br>";
/*EX9*/

$saisieex9="55£";
$saisieC=substr($saisieex9, 0,-1);
$total=intval($saisieC);

$euros='€';
$eurosY=stripos($saisieex9, '€');

$francSuisseY=stripos($saisieex9, 'CHF');

$livreSterlingY=strpos($saisieex9, '£');

$dollarsY=strpos($saisieex9, '$');
$e=0.0;
$l=0.0;
$s=0.0;
$d=0.0;


if($eurosY !== false)
{
    $l=$total*0.90;
    $s=$total*1.13;
    $d=$total*1.14;
    echo $total.' € vaut : '.$l.' £, '.$d.' $, '.$s.' CHF.';
}
if($francSuisseY !== false)
{
    $l=$total*0.79;
    $e=$total*0.93;
    $d=$total*1.03;
    echo $total.' CHF vaut : '.$l.' £, '.$d.' $, '.$e.' €.';
}
if($livreSterlingY !== false)
{
    $e=$total*1.19;
    $s=$total*1.27;
    $d=$total*1.31;
    echo $total.' £ vaut : '.$e.' €, '.$d.' $, '.$s.' CHF.';
}
if($dollarsY !== false)
{
    $l=$total*0.76;
    $s=$total*0.97;
    $e=$total*0.90;
    echo $total.' $ vaut : '.$l.' £, '.$e.' €, '.$s.' CHF.';
}


