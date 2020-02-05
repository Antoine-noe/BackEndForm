<?php


function affichlist()
{
    $tabformation=['Algorithme', 'Bootstrap', 'CMS', 'Maquettage', 'PHP'];
foreach($tabformation as $value)
{
    echo '<option value="'.$value.'">'.$value.'</option>';
}
}




