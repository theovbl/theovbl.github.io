<?php
    require_once('db.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- CRUD: CREATE, READ(SELECT), UPDATE, DELETE -->
    <!-- Vous allez avoir plusieurs fichier 
    Dans un dossier 'Views' vous avez: create.php, read.php, update.php
    Dans un dossier 'Controllers' vous avez: create_ctrl.php, read_ctrl.php, update_ctrl.php, delete_ctrl.php 

    Vous devez créer une base de donnée que vous nommerez crud avec interclassement 
    utf8_general_ci (mb3 ou mb4)

    Dans cette base de donnée, vous allez créer une table user avec 3 attributs id, pseudo, mot_de_passe, description

    L'id' sera un entier et la clé primaire de la table sera auto incrémenté
    "Pseudo" sera en varchar 255 tout comme "motDePasse"
    "description" sera en TEXT

    L'index.php affichera un tableau de user, chaque ligne de ce tableau affichera les informations 
    (id, pseudo, mot de passe hashé, description) de cet user et permettra aussi la suppression, 
    la modification et l'affichage d'un user via un bouton ou un lien
    L'index.php affichera  aussu un bouton permettant la création d'un user
    create.php affichera le formulaire de création d'user
    update.php affichera le formulaire prérempli d'user afin de la modifier
    read.php afficher une liste à puce des informations de l'user

    
-->
<table>
            <tr>
                <th>Identification :</th>
                <th>Pseudo:</th>
                <th>Mot-de-passe :</th>
                <th>Description :</th>
             
            </tr>
            <?php
                $select = $bdd->prepare('SELECT * FROM user');
                $select->execute();
                $select = $select->fetchAll();
                if (!empty($select)) {
                    # Le foreach prend tout ce qui ce trouve dans $select et le range dans les variable $index qui sera l'index
                    # et valeur qui est son les valeur de l'index
                    foreach ($select as $valeur) {
                        $id = $valeur['id'];
                        $pseudo = $valeur['pseudo'];
                        $motdepasse = $valeur['mot_de_passe'];
                        $description = $valeur['description'];
                       

                        echo "<tr> 
                        <td> $id </td>
                        <td> $pseudo </td>
                        <td> $motdepasse </td>
                        <td> $description </td>
                        <td>
                            <form method='post' action=''>
                                <input type='hidden' name='remove' value='$id'>
                                <button type='submit'>Supprimer</button>
                                <input type='hidden' name='remove' value='$id'>
                                <button type='submit'>Modifier</button>
                            </form>
                        </td>
                    </tr>";
                }
        
                if (isset($_POST['remove'])) {
                    $removeID = $_POST['remove'];
                    $delete = $bdd->prepare('DELETE FROM user WHERE id = ?');
                    $delete->execute([$removeID]);
        
                    
                }
            }
            ?>
        </table>
    </form>

</body>
</html>