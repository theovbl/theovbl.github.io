[Retour](https://github.com/TamakiYagami/Cours/tree/main/CoursJS)
# let, var 
Les variables sont utilisées pour stocker et manipuler des données dans un programme :
stockage de données, Manipulation de données, réutiliser des données.
Création de variable qui peuvent être modifié 

Exemple: 
```js
let MaVariable = "Coucou"
var MaVariableSecondaire = "Hello"

MaVariable = "Hello"
MaVariableSecondaire = "Coucou"

```

# -B const 

Création de variable qui ne peuvent pas être modifié JAMAIS 
complètement Statique

# -B Type de Variables 

- INTEGER : nombre réel/ nombre Entier
- FLOAT : Nombre Imaginaire / Nombre à Virgule 
- STRING : Texte (chaîne de caractère)
- ARRAY : Variable de type Tableau
- BOOL : Vrai ou Faux
- NULL : Valeur NULL qui n'est pas un type de variable mais on le considère comme parce qu'il est null

# -B Concaténation

Concaténation sert ajouter/additioner certain élément a une chaîne de caractère 
par exemple : 

Je suis développeur + de site web
```js
var phrase = "Je suis développeur"
phrase = phrase + " de site web"

```
J'ai + 10 + nombre de stagiaire
```js
var NombreStagiaire = ""
var nombre = 10
NombreStagiaire = "J'ai " + nombre + " nombres de stagiaire"
NombreStagiaire = `J'ai ${nombre} nombres de stagiaire`
```
Les deux fonctionnes pareil 

# -B Les conditions 
Les conditions en JavaScript sont utilisées pour introduire de la logique dans le code, permettant ainsi d'adapter le comportement du programme en fonction de différentes situations et conditions.
```js
let age = 18;
if (age >= 18) {
  console.log("Personne majeure");
} else {
  console.log("Personne mineure");
}

let heure = 14;
if (heure < 12) {
  console.log("Bonjour !");
} else if (heure < 18) {
  console.log("Bonne après-midi !");
} else {
  console.log("Bonne soirée !");
}

let score = prompt("Entrez votre score :");

if (score >= 50) {
  console.log("Félicitations, vous avez réussi !");
} else {
  console.log("Désolé, vous n'avez pas réussi.");
}
```
if / else if / else / switch
Si / Sinon si/ sinon/ multi condition

Un else if ne ce met jamais après un else sinon tu meurt et ton script aussi (ps: c'est moi qui te tue)

```js
switch(UAreAlive?()) {
    case 'Yes':
        console.log('Oui')
        break; // Faire attention a ne pas oublié le break car si on le met pas tout explose et l'action suivante ce sera jouer même si elle ne correspond pas 
    case 'No':
        console.log('Non')
        break;
    case 'MAYBE':
        console.log("Je ne sais pas")
        break;
    default:
        console.log("Je n'existe pas")
        break;
}
```

## -B Opérateurs
Les opérateurs en JavaScript sont des symboles ou des mots-clés qui effectuent des opérations sur des variables ou des valeurs. 
Ils sont essentiels pour effectuer des calculs, des comparaisons, des opérations logiques et d'autres manipulations de données. 

== égalité il ne vérifie pas le type de la variable

=== strictement égale il vérifie le type de la variable

si on a deux variables 
```js
var nombreString = "10" Le type est STRING
var nombreInt = 10 Le type est INTEGER
if (nombreString == nombreInt) {
    //il passe ici puisque les deux variable sont entre guillemet les même
}
if (nombreString === nombreInt) {
    //il ne passe pas ici puisque les variable n'ont pas le même type
}
```
< / <= inférieur / inférieur ou égal

\> / >= supérieur / supérieur ou égal

### -B != Different de 
### -B !== Strictement différent de 
```js
var nombreInt = 10 Le type est INTEGER
if (nombreInt != 11) {
    il passe bien ici
}
```

### -B && Et puis 
```js
var nombreInt = 10 Le type est INTEGER
if (NombreInt != 11 && NombreInt != 9) {
    Il va passer ici car il est différent de 11 et de 9
    Les deux valeurs doivent être correct
}
```
### -B || Ou
```js
var nombreInt = 10 Le type est INTEGER
if (NombreInt != 11 || NombreInt != 10) {
    Il va passer ici car il est différent de 11 et de 10
    C'est soit une variable sois l'autre
}
```

### -B ! Inverse la variable
```js
var Beau = true

if (!Beau) {
    Beau est false(moche) et ne passe donc pas 
}
```
### -B Les Calculs
```js 
var Calcul = 10

Calcul = Calcul - 5
Calcul -= 5

Calcul = Calcul + 5
Calcul += 5

Calcul = Calcul / 5 
Calcul /= 5

Calcul = Calcul * 5
Calcul *= 5 
```
Chaque double ligne revient à la même chose

### -B Modulo

Le modulo sert à récupérer le reste d'une division euclidienne 

Exemple : 

    7 % 2 = 1 Car on a bien un reste
    8 % 3 = 2 Car on a bien un autre reste
    340 % 5 = 0 Car on a pas de reste



