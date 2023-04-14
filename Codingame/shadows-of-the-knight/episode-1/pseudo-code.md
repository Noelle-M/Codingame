# Shadows of the Knight - Episode 1
## Pseudo-code
### Initialisation:
Lire W, H
Lire N
Lire X0, Y0

#### Définir la position actuelle (posX, posY) = (X0, Y0)

### Boucle principale (tant que N > 0) :
#### 1. Lire la direction des bombes
#### 2. Mettre à jour les limites de recherche en fonction de la direction des bombes:
<pre>
Si la direction est "U", mettre à jour la limite supérieure de Y
Si la direction est "D", mettre à jour la limite inférieure de Y
Si la direction est "L", mettre à jour la limite gauche de X
Si la direction est "R", mettre à jour la limite droite de X
</pre>

#### 3. Effectuer la recherche dichotomique pour trouver les nouvelles coordonnées (newX, newY) :
<pre>
newX = (limite gauche de X + limite droite de X) / 2
newY = (limite supérieure de Y + limite inférieure de Y) / 2
</pre>

#### 4. Afficher les nouvelles coordonnées (newX, newY)

#### 5. Mettre à jour la position actuelle (posX, posY) = (newX, newY)

#### 6. Décrémenter N (nombre de sauts restants)
