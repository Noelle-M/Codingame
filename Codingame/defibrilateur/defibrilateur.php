<?php
fscanf(STDIN, "%s", $LON);
fscanf(STDIN, "%s", $LAT);
fscanf(STDIN, "%d", $N);

$LON = floatval(str_replace(",", ".", $LON));
$LAT = floatval(str_replace(",", ".", $LAT));

$defibrillateurs = [];

for ($i = 0; $i < $N; $i++) {
    $defibrillateur = stream_get_line(STDIN, 256 + 1, "\n");
    $defibrillateur = str_replace(",", ".", $defibrillateur);
    $defibrillateurs[] = explode(";", $defibrillateur);
}

$minDistance = PHP_INT_MAX;
$minDistanceIndex = -1;

foreach ($defibrillateurs as $index => $defibrillateur) {
    $longitudeA = floatval($defibrillateur[4]);
    $latitudeA = floatval($defibrillateur[5]);

    $latitudeMoyenne = ($LAT + $latitudeA) / 2;
    $cosLatitudeMoyenne = cos(deg2rad($latitudeMoyenne));

    $x = ($LON - $longitudeA) * $cosLatitudeMoyenne;
    $y = $LAT - $latitudeA;
    $xCarre = $x * $x;
    $yCarre = $y * $y;

    $distance = sqrt($xCarre + $yCarre) * 6371;

    if ($distance < $minDistance) {
        $minDistance = $distance;
        $minDistanceIndex = $index;
    }
}

$nomLieuPlusProche = $defibrillateurs[$minDistanceIndex][1];

echo $nomLieuPlusProche;
