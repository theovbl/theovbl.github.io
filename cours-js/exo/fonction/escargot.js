// Faire un exercice qui détermine en combien de temps un escargot sortira d'un puit en sachant le profondeur du puit en cm
// l'escargot avance de 7 cm chaque jour et recule de 2 cm chaque nuit

// Exemple : 
// Jour 1 : 7  - 2     = 5 cm
// Jour 2 : 5  + 7 - 2 = 10 cm
// Jour 3 : 10 + 7 - 2 = 15 cm
// Jour 4 : 15 + 7 - 2 = 20 cm
// Jour 5 : 20 + 7 - 2 = 25 cm
// Jour 6 : 25 + 7 - 2 = 32 cm

let positionEscargot = 0;
let jours = 0;

function deplacementEscargot(profondeurPuit) {
    while (positionEscargot < profondeurPuit) {
        jours++;
        positionEscargot += 7; // avance de 7 cm le jour
        if (positionEscargot >= profondeurPuit) {
            break;
        }
        positionEscargot -= 2; // recule de 2 cm la nuit
    }
    return jours;
}
// Exemple d'utilisation avec une profondeur de puit de 32 cm
let profondeurPuit = 2000;
let joursNecessaires = deplacementEscargot(profondeurPuit);

// Affichage du résultat
console.log(`Il faut ${joursNecessaires} jours pour que l'escargot sorte du puit.`);




