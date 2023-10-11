<?php 
require_once('../catbar/function/dbcat.php');
session_start(); // On se connecte
if (!empty($_SESSION)) { // voici pour se déconnecter
    session_unset();
    session_destroy();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css"> 
    <title>Connexion</title>
</head>
<body>
<?php 
        $_GET['page'] = 'login';
        include 'inc/header.php'; 
    ?> <!-- include nous redirige vers header.php là ou nous avons ranger le fichier header-->
    <br><br><br><br>

    <form method='post'>
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Se connecter">
            <a href="register.php">Vous n'avez pas de compte ? Chat pristi!</a>
        </div>
    </form>

    <?php 
    if (isset($_POST) && !empty($_POST)) { // Quand on met * c'est pour tous sélectionner 
        $select = $bdd->prepare('SELECT * FROM users WHERE (username=:user OR email=:user)');
        $select->execute(array(
            'user' => $_POST['username'], // => c'est rangé dans un tableau associatif
            'pass' => password_hash($_POST['password'], PASSWORD_ARGON2ID) // Argond2id est très très sécurisé
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);
        // if (empty($select)== fasle && password_verify ... 
        if (!empty($select) && password_verify($_POST['password'], $select['password'])) {
            session_start();
            $_SESSION = $select;
            header('Location: index.php');
        } else {
            echo '<script> alert("Identifiant invalide") </script>';
        }
    }
    
    ?>



<br><br><br><br><br><br><br>
    <?php include 'inc/footer.php'; ?>

</body>
</html>