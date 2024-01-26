let PieceAuto

let test = async function() {
    // L'async permet de désyncroniser la fonction par rapport au reste du code
    await fetch('./pieceAuto.json')
    // Await permet d'attendre que la fonction qui le suit sois terminer
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            PieceAuto = json
        })
    console.log(PieceAuto)
    // Ici je récupère l'intégralité du fichier JSON


    let TableHTML = document.createElement('table')
    document.body.appendChild(TableHTML)
    // Ici je créer mon tableau en HTML et je le met enfant du body 

    let TR = document.createElement('tr')
    // Ici je créer ma première ligne qui contient les noms des colonnes
    for (const [key, value] of Object.entries(PieceAuto[0])) {
        // Object.entries permet de rendre un objet literable c'est à dire le rendre apte a etre lu par une boucle
        let th = document.createElement('th')
        // Je créer mes premiers th qui contient le noms des colonnes
        th.textContent = key
        // Je défini le texte de chaque th
        TR.appendChild(th)
        // Je met chaque th enfant de ma ligne tr
    }    
    TableHTML.appendChild(TR)
    // Je met tr enfant de mon tableau html

    PieceAuto.forEach(element => {
        // Mon forEach permet de lire ma variable PieceAuto
        let TR = document.createElement('tr')
        // Je créer mon TR

        for (const [key, value] of Object.entries(element)) {
            let td = document.createElement('td')
            // Je créer mon td
            td.textContent = value
            // Je défini le texte de chaque colonne
            TR.appendChild(td)
            // Je met chaque td enfant de tr
        }
        TableHTML.appendChild(TR);
        // Je met chaque tr enfant de ma table html
    });
    // Récupérer des valeur de la variable PieceAuto et les afficher sur la page web
}

test()