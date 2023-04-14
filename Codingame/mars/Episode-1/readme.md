# Mars Lander - Episode 1 Solution in PHP
Explication en détail chaque étape de la solution du jeu "Mars Lander - Episode 1" en PHP. Le but du jeu est de faire atterrir en toute sécurité le module d'atterrissage sur la surface de Mars en contrôlant la puissance et l'orientation de ses propulseurs.

## Lecture des entrées
### Surface de Mars
La première entrée est un entier $surfaceN, qui représente le nombre de points 
par lesquels passe la surface de Mars.

Ensuite, nous avons une boucle for qui lit les coordonnées de chaque point de 
la surface. Les coordonnées sont stockées dans les variables $landX et $landY. 
Cependant, ces coordonnées ne sont pas utilisées dans cette version simplifiée du jeu.

### Données du module d'atterrissage
La boucle while (TRUE) permet de lire les données du module d'atterrissage 
à chaque tour du jeu jusqu'à ce qu'il atterrisse ou se bloque. Les données 
sont les suivantes :

<ul>
<li>$X, $Y : position actuelle du module d'atterrissage</li>
<li>$hSpeed, $vSpeed : vitesse horizontale et verticale du module d'atterrissage</li>
<li>$fuel : quantité de carburant restante</li>
<li>$rotate, $power : rotation et puissance des propulseurs du module d'atterrissage</li>
</ul>

## Contrôle du module d'atterrissage
Le contrôle du module d'atterrissage se fait en ajustant la rotation et 
la puissance des propulseurs. Dans cette version simplifiée du jeu, seule 
la puissance des propulseurs est ajustée.

### Ajustement de la puissance des propulseurs
Si la vitesse verticale ($vSpeed) est inférieure ou égale à -40, 
la puissance des propulseurs est augmentée à 4 pour ralentir la descente. 
Sinon, la puissance des propulseurs est réduite à 3 pour économiser du carburant.

<pre>
if ($vSpeed <= -40) {
    echo("0 4\n");
} else {
    echo("0 3\n");
}
</pre>

La rotation des propulseurs est maintenue à 0 dans cette version simplifiée du jeu.

## Exemple d'utilisation hors CodinGame
Pour exécuter le code, copiez-le dans un fichier PHP et lancez-le dans un 
environnement qui prend en charge l'entrée standard (STDIN). 
Les entrées du jeu doivent être fournies manuellement ou en les redirigeant 
à partir d'un fichier.
