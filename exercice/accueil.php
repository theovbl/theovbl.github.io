
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
  
    <title>Page d'accueil</title>
</head>
<body>
    <a href="accueil.php">Accueil</a>
    <a href="connexion.php">Se connecter :</a>
    <a href="inscription.php">Inscription :</a>
<br><br><br><br><br><br><br><br><br><br>

<?php
    if (isset($_POST['pseudo'])) {
        $pseudo = $_POST['pseudo'];
        echo "<h1> Hello ! $pseudo</h1>";
    } else {
        echo "<p>Nom d'utilisateur non spécifié.</p>";
    }
    ?>
        <?php 
$heure= "Nous somme le : ";
echo $heure ;
echo date  ('d/m/y'); ?>
</body>
</html>