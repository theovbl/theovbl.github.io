[Retour](https://github.com/TamakiYagami/Cours/tree/main/CoursJS)
# -B Les boucles
Une boucle en JavaScript est une structure de contrôle qui permet d'exécuter un bloc de code plusieurs fois, tant qu'une condition spécifiée est vraie, ou jusqu'à ce qu'une condition soit satisfaite. 
Les boucles sont utilisées pour automatiser des tâches répétitives et itérer sur des ensembles de données.


for /   while    /  do while /   foreach       / for in  /    for of 
pour   tandis que    fait puis    pour chaque    pour dans     pour de 
                    tandis que      element

### -B For
```js
for (
    [Variable Incrémentant (point de départ)]; 
    [Condition (Jusqu'ou il va aller)]; 
    [Expression Incrémentant (De combien on va avancer)])

for (       
    var i=0;              
    i<10;                
    i=i+0.1) {
    console.log(`Bonjour ${i} fois`)
}
```
### -B While
```js
while (true) { // Tant qu'il est vrai la boucle continue
    // Si je suis faux je ne tourne jamais
    console.log('Je tourne')
}
```
### -B Do While
```js
do {
    // Je m'execute une fois
} while (true) // Puis tant que je suis vrai je continue
```
### -B For in
```js
let tab = [1, 2, 3, 4, 5, 6]

// Mon for ici va récupérer les index de mon tableau tab
for (const index in tab) {
}
```
Exemple : 
```js
//         0  1  2  3  4  5
let tab = [1, 2, 3, 4, 5, 6]
//               age        prenom          nom
let tab_assoc = {age: 10, prenom: "Alfred", nom: "ok"}

for (let index in tab_assoc) {
    console.log("Voici l'index du tableau : " + index)
    console.log("Voici la valeur de mon tableau : " + tab_assoc[index])
}
```
### -B For of 
Exemple : 
```js
//         0  1  2  3  4  5
let tab = [1, 2, 3, 4, 5, 6]

// Pour les tableau associatif ca ne fonctionne pas !

for (let valeur of tab) {
    console.log('Voici les valeurs du tableau :' + valeur)
}
```

### -B ForEach
```js
// Index   0  1  2  3  4  5 
let tab = [1, 2, 3, 4, 5, 6]

// Pour les tableau associatif ca ne fonctionne pas !

tab.forEach((valeur, index) => {
    console.log(valeur, index)
})
```