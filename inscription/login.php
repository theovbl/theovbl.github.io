<?php
    require_once('connexion.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
   
    <title>Login</title>
</head>
<body>
    <a href="">Accueil</a>
      <a href="login.php">Connexion :</a>
      <a href="formulaire.php">Le formulaire  :</a>

      <form action="" method="get">
        <pre>
            <label for="username">Votre pseudo :</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" maxlength=4>
            <br>
            <input type="submit" value="GO !!">
        </pre>
    </form>
    <?php

    if (isset($_GET['username']) && !empty($_GET['password'])) {
    $user = $_GET['username'];
    $password = sha1($_GET['password']);

    $select = $bdd->prepare('SELECT * FROM formulaire WHERE username=? AND password=?');
    $select->execute(array($user, $password));
    $total = $select->fetch(PDO::FETCH_ASSOC);

    if ($total) {
        echo "Identifiant ou mot de passe incorrect";
    } else {
        echo "hello" . $total['username'];

    }
}
?>
    
</body>
</html> 