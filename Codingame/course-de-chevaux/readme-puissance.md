# Trouver la différence minimale entre les puissances de chevaux

![](https://img.shields.io/badge/Langage-PHP-blue.svg?style=plastic&logo=php)

![FixedSociableGosling-max-1mb](https://user-images.githubusercontent.com/43520762/232017605-12897e61-c78e-44b7-82dd-5fada4339c2e.gif)

Ce programme trouve la différence minimale entre les puissances de chevaux dans un tableau donné. Il est écrit en PHP et lit les données d'entrée depuis l'entrée standard (STDIN).

## Fonctionnement du code

#### 1. Lecture du nombre de chevaux (N) depuis l'entrée standard :
<pre>fscanf(STDIN, "%d", $N);</pre>

#### 2. Lecture des puissances de chevaux (pi) depuis l'entrée standard $tabPi :
<pre>
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d", $pi);
    $tabPi[] = $pi;
}
</pre>

#### 3. Calcul du nombre d'éléments dans le tableau et tri du tableau en ordre croissant :
<pre>
$nbrElements = count($tabPi);
sort($tabPi);
</pre>

#### 4. Initialisation de la différence minimale avec la valeur maximale possible pour un entier en PHP :
<pre>$differenceMin = PHP_INT_MAX;</pre>
$differenceMin = PHP_INT_MAX; est une instruction qui initialise la variable $differenceMin avec la valeur maximale possible pour un entier (int) en PHP. PHP_INT_MAX est une constante pré-définie en PHP qui représente la valeur maximale pour un entier sur la plateforme en cours d'exécution.

L'utilisation de PHP_INT_MAX pour initialiser la variable $differenceMin est une technique courante pour garantir que toute différence trouvée lors de l'exécution du code sera inférieure à la valeur initiale de $differenceMin. Ainsi, la première différence calculée entre les éléments du tableau remplacera cette valeur initiale, et les différences ultérieures seront comparées à la différence minimale courante.

Dans le contexte de ce problème, cela signifie que nous commençons avec une différence minimale très grande, et nous la mettons à jour au fur et à mesure que nous trouvons des différences plus petites entre les éléments adjacents du tableau trié. À la fin de la boucle, $differenceMin contiendra la différence minimale entre deux nombres dans le tableau.

#### 5. Parcours du tableau et calcul de la différence entre les éléments adjacents. Si la différence calculée est inférieure à la différence minimale actuelle, mettre à jour la différence minimale :
<pre>
for ($i = 0; $i < $nbrElements - 1; $i++) {
    $difference = $tabPi[$i+1] - $tabPi[$i];
    
    if ($difference < $differenceMin) {
        $differenceMin = $difference;
    }
}
</pre>

#### 6. Affichage de la différence minimale :
<pre>echo $differenceMin;</pre>
