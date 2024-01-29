

function PieceAuto (id, nom, prix, categorie, image, description, disponible) {

    this.id = id,
    this.nom = nom,
    this.prix = prix,
    this.categorie = categorie,
    this.image = image,
    this.description = description,
    this.disponible = disponible
}

PieceAuto.prototype.afficher = function() {
    console.log(this.nom)
}