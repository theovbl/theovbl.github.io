<?php
require_once('connexion.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
</head>
<body>

<p>Chèr(e) visiteur merci de bien vouloir vous inscrire via notre author</p>
    <form action="" method="post"> <!-- On créer un formulaire pour se co-->
        <pre> 
            <label for="id">id:</label>
            <input type="number" name="id" id="id" required >
            <br>
            <label for="author">author :</label>
            <input type="email" name="author" id="author" required> 
            <br>
            <label for="created">created :</label>
            <input type="date" name="created" id="created" required>
            <br>
            <label for="body">body :</label>
            <input type="text" name="body" id="body" required>
           
    
            <br>
            <input type="submit" value="S'inscrire">
        </pre>
    </form>

    <p>Chèr(e) visiteur merci de bien vouloir créer votre software</p>

    <form action="function/AddSoftware.php" method="post"> <!-- On créer un formulaire pour se co-->
        <pre> 
            <label for="id">id:</label>
            <input type="number" name="id" id="id" required >
            <br>
            <label for="name">name :</label>
            <input type="text" name="name" id="name" required> 
            <br>
            <label for="contact">contact :</label>
            <input type="email" name="contact" id="contact" required>
            <br>
            <label for="version">version :</label>
            <input type="text" name="version" id="version" required>
            <br>
            <label for="description">description :</label>
            <input type="text" name="description" id="description" required>
            <br>
            <input type="submit" value="S'inscrire">
        </pre>
    </form>

    <p>Chèr(e) visiteur merci de bien vouloir créer votre Component</p>
    <form action="function/AddComponent.php" method="post"> <!-- On créer un formulaire pour se co-->
        <pre> 
            <label for="id">id:</label>
            <input type="number" name="id" id="id" required >
            <br>
            <label for="name">name :</label>
            <input type="text" name="name" id="name" required> 
            <br>
            <label for="contact">contact :</label>
            <input type="email" name="contact" id="contact" required>
            <br>
            <label for="description">description :</label>
            <input type="text" name="description" id="description" required>
            <br>
            <input type="submit" value="S'inscrire">
        </pre>
    </form>

    <p>Chèr(e) visiteur merci de bien vouloir créer votre Package </p>
    <form action="function/AddPackage.php" method="post"> <!-- On créer un formulaire pour se co-->
        <pre> 
            <label for="id">id:</label>
            <input type="number" name="id" id="id" required >
            <br>
            <label for="name">name :</label>
            <input type="text" name="name" id="name" required> 
            <br>
            <label for="version">version :</label>
            <input type="text" name="version" id="version" required>
            <br>
            <label for="maintainer">maintainer :</label>
            <input type="email" name="maintainer" id="maintainer" required>
            <br>
            <label for="description">description :</label>
            <input type="text" name="description" id="description" required>
            <br>
            <input type="submit" value="S'inscrire">
        </pre>
    </form>

    <p>Chèr(e) visiteur merci de bien vouloir créer votre Symptom </p>
    <form action="function/AddSymptom.php" method="post"> <!-- On créer un formulaire pour se co-->
        <pre> 
            <label for="id">id:</label>
            <input type="number" name="id" id="id" required >
            <br>
            <label for="name">name :</label>
            <input type="text" name="name" id="name" required> 
            <br>
            <label for="keyword">keyword :</label>
            <input type="text" name="keyword" id="keyword" required>
            <br>
            <label for="description">description :</label>
            <input type="text" name="description" id="description" required>
            <br>
            <input type="submit" value="S'inscrire">
        </pre>
    </form>
    <p>Chèr(e) visiteur merci de bien vouloir créer votre bug </p>
    <form action="function/AddBug.php" method="post"> <!-- On créer un formulaire pour se co-->
        <pre> 
            <label for="id">id:</label>
            <input type="number" name="id" id="id" required >
            <br>
            <label for="author">author :</label>
            <input type="email" name="author" id="author" required> 
            <br>
            <label for="owner">owner :</label>
            <input type="email" name="owner" id="owner" required>
            <br> 
            <label for="created">created :</label>
            <input type="date" name="created" id="created" required>
            <br>
            <label for="updated">updated :</label>
            <input type="date" name="updated" id="updated" required>
            <br>
            <label for="resolved">resolved :</label>
            <input type="date" name="resolved" id="resolved" required>
            <br>
            <label for="severity">severity </label>
            <label for="haute">haute :</label><input type="radio" name="haute" id="haute" value="haute"required>
            <label for="Moyenne">Moyenne :</label><input type="radio" name="moyenne" id="moyenne" value="moyenne"required>
            <label for="basse">basse :</label><input type="radio" name="basse" id="basse" value="basse"required>
            <br>
            <label for="severity">status </label>
            <label for="haute">haute :</label><input type="radio" name="haute" id="haute" value="haute"required>
            <label for="Moyenne">Moyenne :</label><input type="radio" name="moyenne" id="moyenne" value="moyenne"required>
            <label for="basse">basse :</label><input type="radio" name="basse" id="basse" value="basse"required>
            <br>
            <label for="summary">summary :</label>
            <input type="text" name="summary" id="summary" required>
            <br>
            <label for="description">description :</label>
            <input type="text" name="description" id="description" required>
            <br>
            <input type="submit" value="S'inscrire">
        </pre>
    </form>
    <form action="function/AddPlatform.php" method="post"> <!-- On créer un formulaire pour se co-->
        <pre> 
            <label for="id">id:</label>
            <input type="number" name="id" id="id" required >
            <br>
            <label for="name">name :</label>
            <input type="text" name="name" id="name" required> 
            <br>
            <label for="description">description :</label>
            <input type="text" name="description" id="description" required>
            <br>
            <input type="submit" value="S'inscrire">
        </pre>
    </form>
    <?php
        if (isset($_POST) && !empty($_POST)) { //Il vérifie si une requête POST a été effectuée et si les données POST ne sont pas vides
            $select = $bdd->prepare('SELECT * FROM attachement WHERE id=?');
            $select->execute(array( $_POST['id']));
            $select = $select->fetchAll();
            if (count($select) <= 0) {
                $insert = $bdd->prepare('INSERT INTO attachement(id, author, created, body) VALUES (?, ?, ?, ?)');
                $insert->execute(array(
                    $_POST['id'],
                    $_POST['author'],
                    $_POST['created'],
                    $_POST['body'],
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