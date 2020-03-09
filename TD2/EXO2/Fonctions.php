<?php

function checkedNumber($saisie)
{
    $bool=FALSE;

    if($saisie>=1 && $saisie<=10)
    {
        $bool=TRUE;
    }
    if(gettype($saisie)==='double') {
        $bool=FALSE;
    }
    return $bool;
}




function checkedString ($chaineCarac)
{
    $bool2=FALSE;
    if(stristr($chaineCarac, ' ')===FALSE)
    {
        $bool2=TRUE;
    }return $bool2;
}


function creationzonetxt($saisie)
{
    echo "<form method=\"get\" action=\"Fonction2.php\">";
    for($i=1; $i<=$saisie; $i++)
    {
        echo " <label for=\"verbe$i\">Verbe $i : </label>
    <input type=\"text\" name=\"verbe$i\" size=\"12\" id=\"verbe$i\"><br>";

    }
    echo "<input type=\"submit\" value=\"OK\"></form>";

}

