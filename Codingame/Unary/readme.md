# Unary
![](https://img.shields.io/badge/Langage-PHP-blue.svg?style=plastic&logo=php)

![bannière-large-de-fond-matrice-code-binaire-106448280](https://user-images.githubusercontent.com/43520762/232014696-c089ee06-9a97-48f2-9c54-add27bb6e55e.jpg)

# Code d'encodage de message en binaire

Ce code PHP prend un message en entrée et l'encode selon un format binaire spécifique. Le format d'encodage utilise les règles suivantes :

- Un seul "0" correspond à la valeur 1
- Deux "0" correspondent à la valeur 0
- Le deuxième bloc est égal à n * "0" pour l'occurrence des 0 ou 1 en chaîne

## Explication du code

1. Le message est lu à partir de l'entrée standard (`STDIN`) et est divisé en un tableau de caractères (`$MESSAGE`).
2. Pour chaque caractère du message :
   - Le caractère est converti en binaire à 7 bits en utilisant la fonction `decbin()` et la fonction `ord()`.
   - Le code binaire est complété avec des "0" à gauche si nécessaire pour obtenir une longueur de 7 bits.
   - Le code binaire du caractère est ajouté à `$lettresDuMessage`.
3. Le code binaire total est divisé en un tableau de "0" et "1" (`$codeBin`).
4. Pour chaque chiffre du code binaire :
   - Si le chiffre est un "1", la chaîne `$oneORzero` est définie sur "0", sinon, elle est définie sur "00".
   - Si c'est le premier chiffre, la chaîne `$solution` est initialisée avec `$oneORzero` suivie d'un espace et d'un "0".
   - Sinon, si `$chiffreAvant` est égal à `$oneORzero`, un "0" est ajouté à la chaîne `$solution`.
   - Sinon, `$oneORzero` et un "0" sont ajoutés à la chaîne `$solution`, séparés par un espace.
   - La chaîne `$chiffreAvant` est mise à jour avec la valeur de `$oneORzero`.
5. Le résultat final est affiché en utilisant la fonction `echo`.

## Exemple d'utilisation

Supposons que le message d'entrée soit "AB". Le code binaire correspondant pour "A" est "0100001" et pour "B" est "01000010". Le code binaire total est donc "010000101000010". Le code encodé selon les règles définies ci-dessus serait "00 0 0 0 00 00 0 0 00 0 0 0 0 0 00 00".

