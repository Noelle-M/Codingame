# Explication du code de localisation de défibrillateurs
Nous allons expliquer pas à pas le code PHP permettant de localiser le défibrillateur 
le plus proche en fonction des coordonnées GPS d'une personne.

## 1. Lecture des entrées
   Tout d'abord, nous lisons les coordonnées de la personne et le nombre de 
   défibrillateurs disponibles :
   
<pre>
fscanf(STDIN, "%s", $LON);
fscanf(STDIN, "%s", $LAT);
fscanf(STDIN, "%d", $N);
</pre>

## 2. Conversion des coordonnées
   Ensuite, nous convertissons les coordonnées en nombres à virgule flottante et remplaçons les virgules par des points pour assurer 
la compatibilité avec les opérations mathématiques :

<pre>
$LON = floatval(str_replace(",", ".", $LON));
$LAT = floatval(str_replace(",", ".", $LAT));
</pre>

## 3. Lecture des informations sur les défibrillateurs
   Nous créons un tableau pour stocker les informations sur 
les défibrillateurs et les lisons à partir de l'entrée standard :

<pre>
$defibrillateurs = [];

for ($i = 0; $i < $N; $i++) {
    $defibrillateur = stream_get_line(STDIN, 256 + 1, "\n");
    $defibrillateur = str_replace(",", ".", $defibrillateur);
    $defibrillateurs[] = explode(";", $defibrillateur);
}
</pre>

## 4. Calcul de la distance et recherche du défibrillateur le plus proche
   Nous initialisons les variables pour stocker la distance minimale et l'index 
   du défibrillateur le plus proche :
   
<pre>
$minDistance = PHP_INT_MAX;
$minDistanceIndex = -1;
</pre>

Ensuite, nous parcourons le tableau des défibrillateurs et calculons la distance entre la personne et chaque défibrillateur. Si la distance est plus courte que la distance minimale précédente, nous mettons à jour la distance minimale et l'index du défibrillateur le plus proche :
<pre>
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
</pre>

## 5. Affichage du résultat
   Enfin, nous récupérons le nom du défibrillateur le plus proche et l'affichons :
   
<pre>
$nomLieuPlusProche = $defibrillateurs[$minDistanceIndex][1];

echo $nomLieuPlusProche;
</pre>