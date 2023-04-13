(1) Lecture de l'entrée du message et division de chaque caractère en un tableau $MESSAGE.
(2) Initialisation des variables pour stocker les lettres du message en binaire, 
les indicateurs de séries de 0 ou 1, et la solution finale.
(3) Parcour de chaque caractère du message, le convertir en binaire à 7 bits, puis concaténation du résultat 
dans la variable $lettresDuMessage.
(4) Division de la chaîne binaire $lettresDuMessage en un tableau $codeBin.
(5) Parcour de chaque élément du tableau $codeBin, en suivant les étapes suivantes pour construire la solution :
    a. Si $codeBin[$i] est 1, définition de $oneORzero sur "0", sinon sur "00".
    b. Si c'est le premier élément, initialisation de la solution avec $oneORzero suivi d'un espace et d'un "0". 
        on défini également $chiffreAvant sur $oneORzero.
    c. Pour les éléments suivants, si $chiffreAvant est égal à $oneORzero, on ajoute simplement un "0" à la solution.
    d. Sinon, on met à jour $chiffreAvant avec $oneORzero, puis on ajoute un espace, $oneORzero, et un "0" à la solution.
(6) Et enfin, affichage de la solution finale.