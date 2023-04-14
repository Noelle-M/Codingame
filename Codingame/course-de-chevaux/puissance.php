<?php

fscanf(STDIN, "%d", $N); // le nombre de chevaux

for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d", $pi); // puissance du cheval (int)
    $tabPi[] = $pi;
}

$nbrElements = count($tabPi);
sort($tabPi);
$differenceMin = PHP_INT_MAX;

for ($i = 0; $i < $nbrElements - 1; $i++) {
    $difference = $tabPi[$i+1] - $tabPi[$i];

    if ($difference < $differenceMin) {
        $differenceMin = $difference;
    }
}

echo $differenceMin;
