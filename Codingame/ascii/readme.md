# ASCII
![](https://img.shields.io/badge/Langage-PHP-blue.svg?style=plastic&logo=php)

![depositphotos_635896292-stock-illustration-ascii-american-standard-code-information](https://user-images.githubusercontent.com/43520762/232016433-671473f0-16df-4378-9075-465df0df6135.jpg)

# Calcul de la moyenne des valeurs ASCII d'une chaîne de caractères

Ce code PHP prend une chaîne de caractères et calcule la moyenne des valeurs ASCII de ses caractères.

## Explication du code

1. La chaîne de caractères `$s` est initialisée avec la valeur "abc".
2. La longueur de la chaîne de caractères est stockée dans la variable `$longueur` en utilisant la fonction `strlen()`.
3. Un tableau vide `$tab` est initialisé pour stocker les valeurs ASCII des caractères de la chaîne.
4. Pour chaque caractère de la chaîne :
   - Le caractère est extrait en utilisant la fonction `substr()`.
   - La valeur ASCII du caractère est obtenue en utilisant la fonction `ord()`.
   - La valeur ASCII est ajoutée au tableau `$tab`.
5. La somme des valeurs ASCII du tableau `$tab` est calculée en utilisant la fonction `array_sum()`.
6. La moyenne des valeurs ASCII est calculée en divisant la somme par la longueur de la chaîne de caractères.
7. La moyenne est affichée en utilisant la fonction `echo`.

## Exemple d'utilisation

Dans cet exemple, la chaîne d'entrée est "abc". Les valeurs ASCII correspondantes sont 97 pour "a", 98 pour "b" et 99 pour "c". La somme des valeurs ASCII est 294, et la moyenne est 294 / 3 = 98.
