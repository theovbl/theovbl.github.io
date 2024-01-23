/*
Ecrire un script composé des fonctions suivante :

Une fonction qui remplit un tableau par des noms saisis par l'utilisateur  via une boite de dialogue , 
cette fonction sera appelée au  clic sur un bouton nommé "Ajouter nom".
    
Une fonction qui renvoie au hasard le nom gagnant et qui sera lancée lorsque l'utilisateur 
clique sur le  bouton "tirage au sort" .
*/


        var noms = [];
        function ajouterNom() {
          var nouveauNom = prompt("Entrez un nouveau nom :");
          if (nouveauNom !== null ) {
            noms.push(nouveauNom);
            alert("Nom ajouté avec succès !");
          } else {
            alert("Nom invalide !");
          }
        }

        function tirageAuSort() {
    if (noms.length === 0) {
      alert("Ajoutez des noms avant de faire le tirage au sort.");
      return;
    }
    var indexGagnant = Math.floor(Math.random() * noms.length);
    var nomGagnant = noms[indexGagnant];
    alert("Le nom gagnant est : " + nomGagnant);
  }
