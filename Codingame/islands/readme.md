# Islands Solution (Récursivité)

![](https://img.shields.io/badge/Langage-PHP-blue.svg?style=plastic&logo=php)

![68597839e1f1f07 jpg_wh300](https://user-images.githubusercontent.com/43520762/232019792-9d19f1b7-61c6-449c-b06f-288cb72785d9.jpg)


Explication en détail chaque étape de la solution NumIslands en PHP, qui permet de compter le nombre d'îlots (représentés par des "1") dans une grille 2D donnée.

## Classe Solution
La classe Solution contient la méthode principale numIslands et une méthode d'aide dfs (Depth-First Search).

### Méthode numIslands
La méthode numIslands prend en paramètre un tableau 2D (matrice) de chaînes de caractères $grid et retourne un entier représentant le nombre d'îlots dans la grille.

#### Initialisation des variables
<ul>
<li>$m : nombre de lignes dans la grille</li>
<li>$n : nombre de colonnes dans la grille</li>
<li>$island : compteur d'îlots, initialisé à 0</li>
</ul>

#### Parcours de la grille
La méthode parcourt chaque élément de la grille en utilisant deux boucles imbriquées for.

#### Vérification des îlots
Si un élément de la grille est égal à '1', cela signifie qu'un îlot a été trouvé. Le compteur d'îlots ($island) est alors incrémenté.

#### Appel de la fonction DFS
La méthode dfs est appelée pour marquer toutes les cellules adjacentes qui font partie de la même île, en passant la grille $grid et les coordonnées actuelles $i et $j.

#### Retour du nombre d'îlots
La méthode numIslands retourne le nombre d'îlots trouvés dans la grille.

### Méthode dfs
La méthode dfs est une fonction récursive qui utilise la technique de recherche en profondeur (Depth-First Search) pour marquer les cellules adjacentes d'un îlot.

#### Vérification des limites et des cellules visitées
La méthode vérifie si les coordonnées actuelles $i et $j sont valides et si la cellule correspondante n'a pas encore été visitée (c'est-à-dire si elle est égale à '1').

#### Marquage des cellules visitées
La cellule visitée est marquée avec un '0' pour éviter les visites répétées.

#### Appels récursifs DFS
La méthode dfs est appelée récursivement pour chaque cellule adjacente (haut, bas, gauche et droite) afin de marquer toutes les cellules faisant partie de la même île.

### Exemple d'utilisation
<pre>
$solution = new Solution();
$grid = [
    ['1', '1', '0', '0', '0'],
    ['1', '1', '0', '0', '0'],
    ['0', '0', '1', '0', '0'],
    ['0', '0', '0', '1', '1']
];

echo $solution->numIslands($grid); // Output: 3
</pre>

Dans cet exemple, la classe Solution est instanciée et la méthode numIslands est appelée avec une grille pré-définie. 
La sortie sera 3, car il y a trois îlots dans la grille donnée.
