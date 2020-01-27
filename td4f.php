<?php
function moyenne($tablo2)
{

    for($j=0; $j<3; $j++)
    {
        $moyenne=0.0;
        for($i=0; $i<5; $i++)
            {
             $moyenne=$moyenne+$tablo2[$j]["notes"][$i];
            }
        $moyenne=$moyenne/5;
    }

    return $moyenne;
}

function meilleurNote($tablo2)
{
    $meilleur=0;
    for($i =0 ; $i < 5; $i++)
    {
        if($meilleur<$tablo2["eleves1"]["notes"][$i])
        {
            $meilleur=$tablo2["eleves1"]["notes"][$i];
        }
    }
    return $meilleur;
}

function tabloblo($tablo2)
    {
         echo '<table>';

         foreach($tablo2 as $i => $j)
             {
            echo '<tr>'.$j;

               foreach($tablo2[$i] as $m => $k)
                {
                 echo '<td>'.$k.'</td>';
                 if($k === "notes")
                 {
                     for($o=0; $o<count($tablo2[$i]["notes"]); $o++)
                     {
                         echo '<td>'.$tablo2[$i]["notes"].'</td>';
                     }
                 }

                 }
            echo '</tr>';
            }
         echo '</table>';


    }





function RandomO()

{
    $minop=1;
    $maxop=4;
    $operateur="";

    $symbol = rand($minop, $maxop);
    if ($symbol === 1) {
        $operateur = "+";
    }
    if ($symbol === 2) {
        $operateur = "-";
    }
    if ($symbol === 3) {
        $operateur = "*";
    }
    if ($symbol === 4) {
        $operateur = "/";

    } return $operateur;


}


$min=1;
$max=1000;
function Randomnb1($min, $max)
{
    $nb1 = rand($min, $max);
    return $nb1;
}
function Randomnb2($min, $max)
{
    $nb2 = rand($min, $max);
    return $nb2;
}

$nb1=Randomnb1($min, $max);
$nb2=Randomnb2($min, $max);
$operateur=RandomO();
function Calcul($nb1, $nb2, $operateur)
{

    $somme=0.0;

    if($operateur === "+")
    {
        $somme=$nb1+$nb2;
    }
    if($operateur === "-")
    {
        $somme=$nb1-$nb2;
    }
    if($operateur === "*")
    {
        $somme=$nb1*$nb2;
    }
    if($operateur === "/")
    {

            $somme=$nb1/$nb2;

    }

 echo $nb1.$operateur.$nb2.' = '.$somme;

}




