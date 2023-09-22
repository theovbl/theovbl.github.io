<?php
require_once('db.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
  
    <title>Inscription</title>
</head>
<body>
      <a href="accueil.php">Accueil</a>
      <a href="connexion.php">Connexion :</a>

     <form action="" method="post">
        <pre>
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <label for="lastname">Nom :</label>
        <input type="text" name="lastname" id="lastname" required>
        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo" id="pseudo" required>
        <label for="date">date de naissance:</label>
        <input type="text" name="date" id="date" required maxlength=12>
        <label for="numero">numéro de téléphone :</label>
        <input type="number" name="number" id="number" required maxlength=8>
        <label for="date">Adresse :</label>
        <input type="text" name="adresse" id="adresse" required>
        <label for="password">mot de passe</label>
        <input type="password" name="password" id="password" required maxlength=8>
        <label for="confirm_password">Confirmation du code :</label>
        <input type="password" name="confirm_password" id="confirm" onchange="modifyPassword()" required maxlength=8>
        <br>
        <input type="submit" value="Inscription!">
        </pre>
        </form>     
<?php
if (isset($_POST) && !empty($_POST)) { 
    
    $select = $bdd->prepare('SELECT * FROM inscription WHERE pseudo=?');
    $select->execute(array( $_POST['pseudo']));
    $select = $select->fetchAll();
    if (count($select) <= 0) {  
        $insert = $bdd->prepare('INSERT INTO inscription(prenom, nom, pseudo, date, numero, adresse, password) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $insert->execute(array(
            $_POST['prenom'],
              $_POST['nom'],
            $_POST['pseudo'],
            $_POST['date'],
            $_POST['numero'],
            $_POST['adresse'],
             sha1($_POST['password']),
            ));
            }
        } else { 
            echo "<script> alert('Le nom d\'utilisateur est déjà utilisé') </script>";
        } 
    ?>
     <script>
        function modifyPassword() {
            let password = document.getElementById('password')
            let confirm = document.getElementById('confirm')

            if (password.value !== confirm.value) {
                confirm.setCustomValidity('Les mot de passes ne sont pas identique')
            } else {
                confirm.setCustomValidity('')
            }
        }
    </script>
</body>
</html>