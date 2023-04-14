<?php

// Initialisation
fscanf(STDIN, "%d %d", $W, $H);
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d %d", $X0, $Y0);

$posX = $X0;
$posY = $Y0;

$leftX = 0;
$rightX = $W - 1;
$upY = 0;
$downY = $H - 1;

// Boucle principale
while ($N > 0) {
    $dir = trim(fgets(STDIN));

    // Met à jour les limites de recherche en fonction de la direction des bombes
    if (strpos($dir, "U") !== false) {
        $downY = $posY - 1;
    }
    if (strpos($dir, "D") !== false) {
        $upY = $posY + 1;
    }
    if (strpos($dir, "L") !== false) {
        $rightX = $posX - 1;
    }
    if (strpos($dir, "R") !== false) {
        $leftX = $posX + 1;
    }

    // Effectue la recherche dichotomique pour trouver les nouvelles coordonnées
    $newX = intdiv($leftX + $rightX, 2);
    $newY = intdiv($upY + $downY, 2);

    // Affiche les nouvelles coordonnées
    echo $newX . " " . $newY . "\n";

    // Met à jour la position actuelle
    $posX = $newX;
    $posY = $newY;

    // Décrémente N (nombre de sauts restants)
    $N--;
}
