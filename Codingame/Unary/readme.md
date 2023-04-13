# Unary

<ul>
<li style="padding: 5px">Lecture de l'entrée du message et division de chaque caractère en un tableau $MESSAGE.</li>
<li style="padding: 5px">Initialisation des variables pour stocker les lettres du message en binaire,</li> 
<li style="padding: 5px">les indicateurs de séries de 0 ou 1, et la solution finale.</li>
<li style="padding: 5px">Parcour de chaque caractère du message, le convertir en binaire à 7 bits, puis concaténation du résultat 
dans la variable $lettresDuMessage.</li>
<li style="padding: 5px">Division de la chaîne binaire $lettresDuMessage en un tableau $codeBin.</li>
<li style="padding: 5px">Parcour de chaque élément du tableau $codeBin, en suivant les étapes suivantes pour construire la solution :
    <ul>
<ol style="padding: 5px">1. Si $codeBin[$i] est 1, définition de $oneORzero sur "0", sinon sur "00".</ol>
<ol style="padding: 5px">2. Si c'est le premier élément, initialisation de la solution avec $oneORzero suivi d'un espace et d'un "0". 
        on défini également $chiffreAvant sur $oneORzero.</ol>
<ol style="padding: 5px">3. Pour les éléments suivants, si $chiffreAvant est égal à $oneORzero, on ajoute simplement un "0" à la solution.</ol>
<ol style="padding: 5px">4. Sinon, on met à jour $chiffreAvant avec $oneORzero, puis on ajoute un espace, $oneORzero, et un "0" à la solution.</ol>
</ul>
</li>

<li style="padding: 5px">Et enfin, affichage de la solution finale.</li>
</ul>