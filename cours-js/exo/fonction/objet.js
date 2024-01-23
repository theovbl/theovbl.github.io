/*
Vous allez créer un objet piscine de type fonction. 
Cet objet piscine aura besoin de 4 informations stockées dans des attributs : 
la longueur, la largeur, la hauteur de la piscine et le débit de remplissage en m3 par minute.

A cette étape vous pouvez déja instancier un objet piscine basique en lui passant 4 valeurs en argument. 
Le problème c'est que cet objet ne fait rien pour le moment. 
Vous allez donc lui ajouter une méthode(fonction) remplissage.

La fonction remplissage calcul le temps de remplissage de la piscine grâce aux attributs de 
l'objet et retourne ce résultat. A ce stade votre objet est fonctionnel et fait ce qu'on lui demande, 
il prend des valeurs et calcul un débit.

*/

function Piscine(longeur, largeur, haut, débit) {
    this.longueur = longeur;
    this.largeur = largeur;
    this.hauteur = haut;
    this.débit = débit;
    
    this.remplissage = () => {
        return (this.longueur * this.largeur * this.hauteur) / this.débit
    }
}

var piscinecreusée = new Piscine(8, 10, 3, 2)
console.log(`La piscine va ce remplir en ${piscinecreusée.remplissage()} minutes`)

var PiscineEnorme = new Piscine(100,100,100,100)