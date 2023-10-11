<?php 
session_start();
require_once('../catbar/function/dbcat.php'); 
// on va faire en sorte que seul adminstrateur pourra se connecter et ceux qui ont un role supérieur à 2
if (!empty($_SESSION)) { //
    $select = $bdd->prepare('SELECT * FROM users WHERE id=?'); // on se connecte à une session avec cela classiquement pour ceux qui ont un compte 
    $select->execute(array(
        $_SESSION['id']
    ));
    $select = $select->fetch(); // Attention c'est ici que nous alons mettre la condition, ceux qui ont un role inférieur à 3 peuvent ne pas se connecter
    if ($select['role'] < 3) {
        header('Location: index.php'); // on renvoie ses personnes sur l'index.php 
    } 
} else {
    header('Location: index.php'); // ceux qui n'ont pas identifiant sont renvoyer vers l'index
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <title>Panel Admin</title>
</head>
<body>
    <?php 
        $_GET['page'] = "paneladmin";
        include 'inc/header.php' 
    ?>
<form action="AddCat.php" method="post">
        <h2>Rajout de chat </h2>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <label for="color">Couleur :</label>
        <input type="text" name="color" id="color" required>
        <label for="photo">Photo :</label>
        <input type="file" name="photo" id="photo" accept="image/png, image/jpeg" required> <!--Accept ce type d'image en format png / jpeg -->
        <label for="description">Déscription :</label>
        <textarea name="desc" id="desc" cols="30" rows="10" required></textarea>
        <label for="male">Male</label>
        <input type="radio" name="sexe" id="sexe" value="m" required>
        <label for="female">Femelle</label>
        <input type="radio" name="sexe" id="sexe" value="f" required>
        <input type="submit" value="Ajouter le chat">

    </form>
    <?php include 'inc/footer.php' ?>

</body>
</html>