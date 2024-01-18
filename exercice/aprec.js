// Créez une fonction nommée aprec qui :

//     prend une note sur 20 en argument
//     renvoie Hideux si la note est entre 0 et 7 exclus
//     renvoie Moche si la note entre 7 et 10 exclus
//     renvoie Nice si la note entre 10 et 15 exclus
//     renvoie GG si la note entre 15 et 20 inclus
//     renvoie BUG si la note n'est pas correcte


// Vous disposez d'un tableau contenant des nombres aléatoires et 
// vous devez créer une fonction sortNumbers(tInit, tInf, tSup) qui va ranger :

//     tous les éléments de tInit inférieurs à 10 dans le tableau tInf
//     et tous les éléments de tInit supérieurs ou égaux à 10 dans le 
//      tableau tSup

// 💡 la fonction doit fonctionner quel que soit le tableau tInit




function aprec(note) {
    if (note >= 0 && note < 7) {
        return "Hideux";
    } else if (note >= 7 && note < 10) {
        return "Moche";
    } else if (note >= 10 && note < 15) {
        return "Nice";
    } else if (note >= 15 && note <= 20) {
        return "GG";
    } else {
        return "BUG";
    }
}
console.log(aprec(18)); 

function initXY(posX, posY) {

}