<!-- Le 1 est vrai en informatique et le 2 est faux en informatique-->
<?php 
session_start();
require_once('../catbar/function/dbcat.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Accueil</title>
</head>
<body>
<?php 
        $_GET['page'] = 'index';
        include 'inc/header.php'; 
    ?>
    <br><br><br><br>
    <div>
        <p>Bienvenue petit chaventurier</p>
    </div>
    <?php if(!empty($_SESSION)) : ?> <!-- quand l'utilisateur est uniquement connecté il pourra voir le formulaire -->
        <!-- Je créer un if global qui ce permet de passer en html pour
        executer ou non les lignes qui trouve entre les balise if et endif -->
        <div>
            <form method="post">
                <h2>Faire une réservation (15 min)</h2>
                <label for="cat">Chat :</label>
                <!-- <datalist id="cat">
                    <option value="Ronron"></option>
                    <option value="Lily"></option>
                    <option value="Pompette"></option>
                    <option value="Garfield"></option>
                </datalist>
                <input list='cat'> -->
                <select name="cat" id="catSelect" required>
                <?php
                // Gràce à ça nous allons que afficher les chats qui ne sont pas réservés
                // Il suffique qu'il y a 1 à veto, transfer ou partout alors on n'affiche pas
                // Si il y a un 1 est vrai donc on n'affiche pas, et on affiche uniquement les 0 
                        $selectCat = $bdd->prepare('SELECT * FROM cat WHERE  veto=0 AND transfer=0'); 
                        // Je séléctionne toute les colonnes et les lignes qui on la colonne reserver, veto et transfer à 0
                        $selectCat->execute();
                        $selectCat = $selectCat->fetchAll();
                        if (!empty($selectCat)) { // Je vérifie que j'ai des lignes qui ont était récuperer
                           
                            // for ($i=0; $i < count($select); $i++) { // Je fait une boucle qui tourne le nombre de ligne récupérer
                             //   echo "<option value='" . $select[$i]['id'] . "'>" . $select[$i]['prenom'] . "</option>";
                            }
    
                    ?>
                </select>
                <label for="table">N° Table :</label>
                <select name="table" id="table" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <label for="date">Date :</label>
                <input type="datetime-local" name="date" id="date" required 
                    value="<?php echo date('Y-n-d'); ?>T<?php echo date('H')+2; ?>:00"
                    min="<?php echo date('Y-n-d'); ?>T08:00" 
                    step="900"
                    max="<?php echo date('Y-n')?>-<?php echo date('d')+7; ?>T18:59" required> 
                    <!--on a jouté un calendrier /
                    
                    On a donné une valeur et on ajoute du php // T c'est l'heure puis on a ajouté +2h  pour la réservation si il est 12H on peut réserver à partir de 14H//:00 c'est pour les minutes
                    Y n d -- Année mois jours / à partir de 8H pour le minimum ( on peut réserverser à partir de 8H00)
                    pour le max on a mit un tiret // puis avec d + 7 pour réserverser jusqu'à 7jours // 19H00 c'est la fermeture du bar à chat -->
                <script>
                    // On nomme une fonction javascript puis après on va sélectionner "ce qui est nomé date" : label for date
                    function ChangeDate() {
                        let Element = document.getElementById('date')
                        // Split est une fonction de JavaScript qui permet de découper une chaine de caractère
                        // Au caractère que on lui donne et il va enfaite nous créer un tableau
                        let temporaire = Element.value.split('T')
                        // parseInt est une fonction de JavaScript qui permet de convertir tout type de variable
                        // en entier 
                        if (parseInt(temporaire[1]) > 19) {
                            Element.setCustomValidity('A cette heure on est fermé')
                        } else {
                            Element.setCustomValidity('')
                        }
                        // let heure  = temporaire[1].split(':')[0]
                        let minute = temporaire[1].split(':')[1]
                        let date = new Date(); // new Date est défini par JavaScript est récupère toute
                        // les informations du moment et d'aujourd'hui
                        if (date.getMinutes() ) {
                            
                        }
                        }
                </script>
                <label for="comment">Commentaire :</label>
                <textarea name="comment" id="comment" cols="30" rows="5" maxlength='255'></textarea>  
                <input type="submit" value="Faire ma réservation">
                </form>
        </div>
        <?php 
        if (isset($_POST) && !empty($_POST)) {
            $insert = $bdd->prepare('INSERT INTO reservation(id_client, id_cat, date, comment, tab) VALUES (?, ?, ?, ?, ?)');
            $insert->execute(array(
                (int)$_SESSION['id'], // On transforme temporairement la variable en entier / avec session on récupère l'id du client ducoup pas besoin de mettre post client
                (int)$_POST['cat'], // On transforme temporairement la variable en entier
                str_replace('T', ' ', $_POST['date']), // Remplace tous les T en espace dans le poste date
                $_POST['comment'],
                (int)$_POST['table'] // On transforme temporairement la variable en entier temporairement
            ));
            // Nous allons faire en sorte que les chats réservés ne soient pas affiché pour la réservation
            // Nous allons mettre à jour dans la base de données les chats en 1 
            $update = $bdd->prepare('UPDATE cat SET reserver=1 WHERE id=?');
            $update->execute(array(
                (int)$_POST['cat'] // On transforme temporrairement la variable en entier
            ));
            header('Location: index.php');
        }
        ?>
    <?php endif; ?>


<br><br><br>

    <?php include 'inc/footer.php'; ?>
</body>
</html>