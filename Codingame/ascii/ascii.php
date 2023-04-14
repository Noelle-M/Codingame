<?php

$s = "abc";
$longueur=strlen($s);
$tab=[];
    for($i=0;$i<$longueur;$i++)
    {
        $caractere=substr($s,$i,1);
        $ascii = ord($caractere);
        $tab[] = $ascii;
    }
    $somme = array_sum($tab);
    $moyenne = $somme/$longueur;

echo $moyenne;
