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

