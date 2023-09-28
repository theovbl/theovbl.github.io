<?php
     require_once('db.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
    <a href="atmindex.php">Page D'accueil</a> 
    <a href="atm.php">Connexion</a>

    <form action="" method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required> 
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" required> 
            <label for="date">date de naissance :</label>
            <input type="date" name="date" id="date" required> 
            <label for="numero">Numero :</label>
            <input type="text" name="numero" id="numero" required> 
            <label for="adress">Adresse :</label>
            <input type="text" name="adress" id="adress" required> 
            <label for="password">Code :</label>
            <input type="password" name="password" id="password" required maxlength=10> 
            <label for="confirm_password">Confirmation du code :</label>
            <input type="password" name="confirm_password" id="confirm" onchange="modifyPassword()" required maxlength=8>
            <br>
            <input type="submit" value="Inscription">
        </pre>
    </form>
<?php
    if (isset($_POST) && !empty($_POST)) {  
        $select = $bdd->prepare('SELECT * FROM formulaire WHERE pseudo=?'); 
        $select->execute(array( $_POST['pseudo']));
        $select = $select->fetchAll();
        if (count($select) <= 0) {                        
            $insert = $bdd->prepare('INSERT INTO formulaire(prenom, nom, pseudo, date, numero, adress, password) VALUES (?, ?, ?, ?, ?, ?, ?)');
            $insert->execute(array( 
            $_POST['prenom'],
            $_POST['nom'],
            $_POST['pseudo'],
            $_POST['date'],
            $_POST['numero'],
            $_POST['adress'],
            sha1($_POST['password']), 
             ));
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
                confirm.setCustomValidity('Les mot de passes ne sont pas identique')
            } else {
                confirm.setCustomValidity('')
            }
        }
    </script>
</body>
</html>