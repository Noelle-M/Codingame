# La fonction strpos()  
est utilisée pour trouver la première occurrence 
d'une chaîne de caractères (substring) dans une autre chaîne de caractères. 
Elle renvoie la position du début de la première occurrence de la chaîne 
recherchée, ou FALSE si la chaîne recherchée n'est pas trouvée.

Voici la syntaxe de la fonction strpos() :
<pre>
int|false strpos ( string $haystack , string $needle [, int $offset = 0 ] )
</pre>
<ul>
    <li>$haystack : la chaîne de caractères dans laquelle nous cherchons une sous-chaîne</li>
    <li>$needle : la sous-chaîne que nous cherchons dans $haystack</li>
    <li>$offset (optionnel) : la position de départ dans la chaîne $haystack à partir 
de laquelle la recherche doit commencer. 
Par défaut, la recherche commence à la position 0.</li>
</ul>


La fonction renvoie la position (index) de la première occurrence de $needle dans $haystack, ou FALSE si $needle n'est pas trouvé. Les positions commencent à 0, donc si strpos() renvoie 0, cela signifie que la chaîne recherchée se trouve au début de la chaîne principale.

Voici un exemple d'utilisation de strpos() :
<pre>
$text = "Bonjour, comment ça va ?";
$recherche = "comment";

$position = strpos($text, $recherche);

if ($position !== false) {
    echo "La chaîne '$recherche' a été trouvée dans '$text' à la position $position.";
} else {
    echo "La chaîne '$recherche' n'a pas été trouvée dans '$text'.";
}
</pre>

Dans cet exemple, $position vaudra 9, car "comment" se trouve à l'index 9 dans la 
chaîne $text.
----------------------------------------------------------------------------------------
# trim(fgets(STDIN))
est une combinaison de deux fonctions en PHP pour lire une ligne de l'entrée 
standard et supprimer les espaces et les caractères de fin de ligne inutiles.

## 1. fgets(STDIN) : 
Cette fonction lit une ligne depuis une ressource de fichier donnée. 
Dans ce cas, la ressource de fichier est STDIN, qui représente l'entrée standard 
(généralement, l'entrée au clavier ou les données fournies par un autre programme 
ou un fichier). fgets() retourne une chaîne de caractères contenant la ligne lue, 
y compris le caractère de fin de ligne (généralement, un saut de ligne "\n" ou une 
combinaison de saut de ligne et de retour chariot "\r\n"). 

## 2. trim() :
Cette fonction supprime les espaces et les caractères de contrôle en début 
et en fin d'une chaîne de caractères. Par défaut, elle supprime les espaces, 
les tabulations, les sauts de ligne, les retours chariot, les tabulations verticales 
et les espaces insécables. Nous pouvons également fournir un deuxième argument à trim() 
pour spécifier les caractères que nous souhaitons supprimer.

Lorsque nous combinons ces deux fonctions en utilisant trim(fgets(STDIN)), nous lisons 
une ligne de l'entrée standard et supprimons les espaces et les caractères de fin de 
ligne inutiles. Cela est utile lorsque nous souhaitons lire une chaîne de caractères 
propre sans espaces ni caractères de fin de ligne supplémentaires.
------------------------------------------------------------------------------------------
# La fonction intdiv()
est une combinaison de deux fonctions en PHP pour calculer la division entière 
entre deux nombres.
Elle renvoie le résultat de la division sous forme d'entier, en tronquant le résultat vers zéro.

La syntaxe de la fonction intdiv() est la suivante :
<pre>
int intdiv ( int $dividend , int $divisor )
</pre>
<ul>
<li>$dividend : le nombre à diviser (numérateur)</li>
<li>$divisor : le nombre par lequel diviser (dénominateur)</li>
</ul>

La fonction renvoie le quotient entier de la division.

Voici un exemple d'utilisation de intdiv() :
<pre>
$dividend = 10;
$divisor = 3;

$result = intdiv($dividend, $divisor);

echo "Le résultat de la division entière de $dividend par $divisor est $result.";
</pre>

Dans cet exemple, $result vaudra 3, car 10 divisé par 3 équivaut à 3 avec un reste 
de 1. La fonction intdiv() renvoie seulement le quotient entier (3) et ignore le reste.

Notons que intdiv() lèvera une DivisionByZeroError si $divisor est égal à zéro, 
car la division par zéro n'est pas définie.

# Dans notre cas :
Dans le contexte de notre code, la ligne <pre>$newX = intdiv($leftX + $rightX, 2);</pre>
calcule la position X médiane entre deux points sur 
l'axe horizontal.

### Voici une explication détaillée :
<ul>
<li>$leftX : la coordonnée X la plus à gauche dans la zone de recherche</li>
<li>$rightX : la coordonnée X la plus à droite dans la zone de recherche</li>
</ul>

La somme de $leftX et $rightX donne la distance totale entre ces deux points sur 
l'axe horizontal.

En divisant cette somme par 2 (intdiv($leftX + $rightX, 2)), nous obtenons la 
position médiane entre les deux points. Comme intdiv() renvoie un entier, le 
résultat sera arrondi vers zéro (tronqué).

Ainsi, $newX représente la coordonnée X médiane entre $leftX et $rightX, 
ce qui est utile pour effectuer une recherche dichotomique dans l'espace 
de recherche horizontal.
