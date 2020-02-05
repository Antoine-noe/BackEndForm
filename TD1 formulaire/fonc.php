<?php
function PWD ($pwd, $comparaison)
{

    $bool=FALSE;
    if($pwd === $comparaison)
    {
        $bool=TRUE;
    }return $bool;
}