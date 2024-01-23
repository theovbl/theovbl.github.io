// Déclarer et définir 2 variables misteryNumber et myNumber 
// de type number.
// En utilisant uniquement l'opérateur ternaire, on affiche :

//     Si les 2 nombres sont égaux Congratulations !
//     Sinon
//         Si le nombre myNumber est inférieur au nombre 
//          misteryNumber, on affiche +
//         Sinon on affiche -
// nombre < 0 ? 'if' : 'else' 

var misteryNumber = 10
var myNumber = 10;

console.log( misteryNumber == myNumber ? 'Congratulations !' : misteryNumber > myNumber ? '+' : '-')