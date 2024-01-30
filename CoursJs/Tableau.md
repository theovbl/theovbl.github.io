[Retour](https://github.com/TamakiYagami/Cours/tree/main/CoursJS)

# -B Les Tableaux
Un tableau en JavaScript est une structure de données qui permet de stocker et d'organiser plusieurs valeurs sous un seul nom. Les tableaux sont utilisés pour stocker des collections d'éléments, que ce soit des nombres, des chaînes de caractères, des objets ou d'autres types de données.

Le nom qu'on leur porte est Array

## -B Tableau Indexé
Un tableau indexé est un tableau qui a ces propre index fixe qui sont des nombre de 0 a infiniment selon la taille du tableau
Exemple d'un tableau indexé : 
```js
//Les index    0 1  2     3               4
let tableau = [1,0,504,74545746, 45465465456465465456]
```

## -B Tableau Associatif
Un tableau associatif est un tableau qui a besoin d'avoir des index définis par l'utilisateur
Exemple d'un tableau associatif :
```js
// Les index défini    prenom               nom             
let tableauAssocie = {
    "prenom" : "Pierre", 
    "nom" : "GrandJean"
}
```

# -B Fonctions pour les Tableau
```js
var TableauExemple = [1, 2, 3, 4, 'a', 'b', 'c', 'abc']
```

## -B push()
Ajoute une ou plusieurs valeurs à la fin d'un tableau

Exemple : 
```js
TableauExemple.push(8); // Je rajoute le nombre 8 à la fin du tableau
TableauExemple.push('coucou') // Je rajoute la string coucou à la fin du tableau
TableauExemple.push('d', 'e', 'f', 'g') // Je rajoute les string d e f g à la fin du tableau dans l'ordre que j'ai donne
```

## -B unshift()
Ajoute une ou plusieurs valeurs au début d'un tableau

Exemple : 
```js
TableauExemple.unshift(8); // Je rajoute le nombre 8 au début du tableau
TableauExemple.unshift('coucou') // Je rajoute la string coucou au début du tableau
TableauExemple.unshift('d', 'e', 'f', 'g') // Je rajoute les string d e f g au début du tableau dans l'ordre que j'ai donne
```

## -B shift()
Supprime le premier élément d'un tableau

Exemple : 
```js
TableauExemple.shift()
// En considérant que le premier element du tableau est 1 en faisais la ligne du dessus le 1 est supprimé du tableau
```

## -B pop()
Supprime le dernier élément d'un tableau

Exemple : 
```js
TableauExemple.pop()
// En considérant que le dernier element du tableau est abc en faisais la ligne du dessus abc est supprimé du tableau 
```

## -B sort()
Permet de trier un tableau

Exemple : 
```js
TableauExemple.sort((chiffreActuel, chiffreSuivant) => chiffreActuel - chiffreSuivant)
// Mon tableau va ce trier en sorte que le chiffre le plus petit soit en premier et les plus grand en dernier
// Le sort n'est utilisé que pour les tableaux de nombre
```

## -B reverse()
Permet de retourner un tableau le dernier deviens le premier et le premier deviens le dernier

Exemple : 
```js
TableauExemple.reverse()
// Notre tableau deviens
// ['abc', 'c', 'b', 'a', 4, 3, 2, 1]
```

## -B join()
Permet d'améliorer l'affiche d'un tableau

Exemple : 
```js
TableauExemple.join('')
// affiche 1234abcabc
```

## -B concat()
Permet de fusionner deux tableaux en un seul en allant à la fin du tableau 

Exemple : 
```js
let tableau = ["z", 'y', 'x', 10, 11, 12]
TableauExemple.concat(tableau)
// [1, 2, 3, 4, 'a', 'b', 'c', 'abc', "z", 'y', 'x', 10, 11, 12]
```

## -B slice()
Permet de récupérer une partie du tableau

Exemple : 
```js
TableauExemple.slice(2, 5)
// [4, 'a', 'b']
```

## -B indexOf()
Permet de récupérer un élément bien précis dans un tableau

Exemple : 
```js
TableauExemple.indexOf('c')
// Renvoie 6
```

## -B filter()
Permet de filtrer un tableau, renvoi uniquement les éléments demander

Exemple : 
```js
TableauExemple.filter(Number.isInteger) //  Me renvoie que les chiffres entier
TableauExemple.filter((valeur) => valeur > 10) // Me renvoie tout les chiffre au dessus de 10
```

## -B map()
Permet de transformer chaque éléments d'un tableau en une autre chose

Exemple : 
```js

```

## -B includes 
Renvoie vrai si il trouve l'argument demander dans le tableau ou chaîne de caractère sinon il renvoie faux si il ne trouve pas 
Exemple : 
```js
var Texte = "J'ai manger un kiwi et maintenant il est absent"
console.log(Texte.includes('et')) // Me renvoie true
console.log(Texte.includes('mangue')) // Me renvoie false
```

## -B find
Retourne la lettre si il l'a trouve dans un tableau ou une chaîne de caractère sinon il retourne undefined
Exemple :
```js
var Texte = "J'ai manger un kiwi et maintenant il est absent"
var TableauTexte = Texte.split('')
console.log(TableauTexte.find((Lettre => Lettre == 'et'))) // Me renvoie 'et'
console.log(TableauTexte.find('mangue')) // Me renvoie undefined
```