<?php
require_once('connexion.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<p>Votre Bug est ajouté ! Attention il a des symptom !</p>

<form action="function/AddSymptom.php" method="post">
        <table>
            <tr>
                <th>Identification du symptom:</th>
                <th>Nom :</th>
                <th>Contact :</th>
                <th>Version :</th>
                <th>Description :</th>
            </tr>
            <?php
                $select = $bdd->prepare('SELECT * FROM symptom');
                $select->execute();
                $select = $select->fetchAll();
                if (!empty($select)) {
                    # Le foreach prend tout ce qui ce trouve dans $select et le range dans les variable $index qui sera l'index
                    # et valeur qui est son les valeur de l'index
                    foreach ($select as $valeur) {
                        $id = $valeur['id'];
                        $name = $valeur['name'];
                      
                        echo "<tr> 
                            <td> $id </td>
                            <td> $name </td>
                        </tr> ";
                    }
                }
            ?>
        </table>
    </form>

<?php
        if (isset($_POST) && !empty($_POST)) { //Il vérifie si une requête POST a été effectuée et si les données POST ne sont pas vides
            $select = $bdd->prepare('SELECT * FROM bug WHERE id=?');
            $select->execute(array( $_POST['id']));
            $select = $select->fetchAll();
            if (count($select) <= 0) {
                $insert = $bdd->prepare('INSERT INTO bug (id, author, owner, created, updated, resolved, severity, status, summary, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
                $insert->execute(array(
                    $_POST['id'],
                    $_POST['author'],
                    $_POST['owner'],
                    $_POST['created'],
                    $_POST['updated'],
                    $_POST['resolved'],
                    $_POST['sverity'],
                    $_POST['status'],
                    $_POST['summary'],
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