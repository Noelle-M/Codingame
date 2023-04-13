<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$s = "abc";
$longueur=strlen($s);
$tab=[];
    for($i=0;$i<$longueur;$i++)
    {
        $caractere=substr($s,$i,1);
        $ascii = ord($caractere);
        $tab[] = $ascii;
    }
    //error_log(var_export($tab, true));
    $somme = array_sum($tab);
    $moyenne = $somme/$longueur;
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)
echo $moyenne;
