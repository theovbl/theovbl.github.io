/*
Créez une fonction qui renvoie le nombre d’arguments avec lesquels elle a été appelée.

Exemple : 

nbrArgs() ➞ 0

nbrArgs({}) ➞ 1

nbrArgs("A") ➞ 1

nbrArgs("A", "B") ➞ 2
*/

/* arguments est une variable javascript qui prends en compte le nombre d'arguments */

function nbrArgs() {
    return arguments.length
}

console.log(nbrArgs());
console.log(nbrArgs({}));
console.log(nbrArgs("A"));
console.log(nbrArgs("A", "B"));