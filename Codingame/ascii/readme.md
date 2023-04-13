# ASCII

#### Ce code calcule et affiche la moyenne des valeurs ASCII des caractères d'une chaîne de caractères donnée. Voici une explication détaillée du code :

<ul>
<li style="padding: 5px">La chaîne de caractères est définie par la variable $s et sa longueur est stockée 
dans la variable $longueur.</li>
<li style="padding: 5px">On créé un tableau vide $tab pour stocker les valeurs ASCII 
des caractères.</li>
<li style="padding: 5px">On parcours chaque caractère de la chaîne en utilisant 
une boucle for.</li>
<li style="padding: 5px">À chaque itération, on extrait un caractère de la chaîne 
à l'aide de la 
fonction substr() et on stocke sa valeur ASCII (obtenue avec la fonction ord()) 
dans le tableau $tab.</li>
<li style="padding: 5px">Une fois que tous les caractères ont été traités, 
on calcule la somme des 
valeurs ASCII à l'aide de la fonction array_sum() et on la stocke dans la variable $somme.</li>
<li style="padding: 5px">On divise la somme par la longueur de la chaîne pour obtenir 
la moyenne des 
valeurs ASCII, que nous stockons dans la variable $moyenne.</li>
<li style="padding: 5px">Enfin, on affiche la moyenne.</li>
</ul>