<?php
require_once('connexion.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Votre software est ajouté !</p>

    <?php
        if (isset($_POST) && !empty($_POST)) { //Il vérifie si une requête POST a été effectuée et si les données POST ne sont pas vides
            $select = $bdd->prepare('SELECT * FROM software WHERE id=?');
            $select->execute(array( $_POST['id']));
            $select = $select->fetchAll();
            if (count($select) <= 0) {
                $insert = $bdd->prepare('INSERT INTO software(id, name, contact, version, description) VALUES (?, ?, ?, ?, ?)');
                $insert->execute(array(
                    $_POST['id'],
                    $_POST['name'],
                    $_POST['contact'],
                    $_POST['version'],
                    $_POST['description'],
                ));
                header("Location: software.php");
                exit ;
            } else {
                echo "<script> alert('L'id  est déjà utilisé') </script>";
            }      
        }
    ?>
</body>
</html>