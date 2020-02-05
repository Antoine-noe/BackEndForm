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
         foreach($tablo2 as $i => $j)
             {
                var_dump($j);
                foreach($tablo2[$i] as $m => $k)
                 {
                    if($k === "notes")
                        {
                            for($o=0; $o<count($tablo2[$i]["notes"]); $o++)
                            {
                             var_dump($tablo2[$i]["notes"]);
                            }
                        }
                 }
             }
    }

function tabloblo2($tablo2)
{
    $moyenne=0;
    $meilleur=0;

    echo '<table>';
    foreach($tablo2 as $i => $j)
    {
        echo '<tr><td style="background-color: cornflowerblue">'.$j["nom"].'</td><td style="background-color: cornflowerblue">'.$j["prenom"].'</td>';

                for($o=0; $o<count($j["notes"]); $o++)
                {
                    $moyenne=$moyenne+$j["notes"][$o];

                    echo '<td>'.$j["notes"][$o].'</td>';
                    if($meilleur<$j["notes"][$o])
                    {
                        $meilleur=$j["notes"][$o];
                    }
                }
                $calcul=$moyenne/count($j["notes"]);
                $moyenne=0;

            echo '<td  style="background-color: red">'.$calcul.'</td><td  style="background-color: orange">'.$meilleur.'</td></tr>';
        $meilleur=0;

    }
    echo'</table>';
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




function Calcul($nb1, $nb2, $operateur)
{

    $somme = 0.0;

    if ($operateur === "+") {
        $somme = $nb1 + $nb2;
    }
    if ($operateur === "-") {
        $somme = $nb1 - $nb2;
    }
    if ($operateur === "*") {
        $somme = $nb1 * $nb2;
    }
    if ($operateur === "/") {

        $somme = $nb1 / $nb2;

    }

    echo $nb1 . $operateur . $nb2 . ' = ' . $somme;
}






