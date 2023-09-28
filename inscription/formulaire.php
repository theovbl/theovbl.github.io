<?php
require_once('connexion.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <a href="accueil.php">Accueil</a>
      <a href="login.php">Connexion :</a>
    <form action="" method="post">
        <pre>
            <label for="name">Prénom :</label>
            <input type="text" name="name" id="name" required>
            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" id="lastname" required>
            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username" required>
            <label for="date">Date de naissance :</label>
            <input type="date" name="date" id="date" required maxlength=8>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required maxlength=4>
            <label for="confirm_password">Confirmation du mot de passe :</label>
            <input type="password" name="confirm_password" id="confirm" onchange="modifyPassword()" maxlength=4>
            <br>
            <input type="submit" value="Inscription">
        </pre>
    </form>
    <?php
        if (isset($_POST) && !empty($_POST)) { //Il vérifie si une requête POST a été effectuée et si les données POST ne sont pas vides
            $select = $bdd->prepare('SELECT * FROM formulaire WHERE username=?');
            $select->execute(array( $_POST['username']));
            $select = $select->fetchAll();
            if (count($select) <= 0) {
                $insert = $bdd->prepare('INSERT INTO formulaire(name, lastname, username, date, password) VALUES (?, ?, ?, ?, ?)');
                $insert->execute(array(
                    $_POST['name'],
                    $_POST['lastname'],
                    $_POST['username'],
                    $_POST['date'],
                    sha1($_POST['password'])
                ));
                header("Location: login.php");
                exit ;
            } else {
                echo "<script> alert('Le nom d\'utilisateur est déjà utilisé') </script>";
            }      
        }
    ?>
    <script>
        function modifyPassword() {
            let password = document.getElementById('password')
            let confirm = document.getElementById('confirm')

            if (password.value !== confirm.value) {
                confirm.setCustomValidity('Les mot de passes ne sont pas identiques')
            } else {
                confirm.setCustomValidity('')
            }
        }
    </script>
</body>
</html>