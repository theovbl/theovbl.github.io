<?php
require_once('./db.php');
require_once('./mail.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>

    <form action="" method="post"> <!-- On créer un formulaire pour se co-->
        <pre> 
            <label for="firstname">Prénom :</label>
            <input type="text" name="firstname" id="firstname" required>
            <br>
            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" id="lastname" required>
            <br>
            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="email">mail :</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
            <br>
            <label for="confirm_password">Confirmation du mot de passe :</label>
            <input type="password" name="confirm_password" id="confirm_password" oninput="ChangeValue()" required>        
      
<!-- Sélectionner le genre avec des boutons/ required: c'est obligatoire de remplir ce champ-->
            <label for="masculin">Masculin :</label><input type="radio" name="genre" class="genre" value="m" required>
            <label for="feminin">Féminin  :</label><input type="radio" name="genre" class="genre" value="f" required>
            <br>
            <input type="submit" value="S'inscrire">
            <a href="./login.php">Vous avez déjà un compte</a>
        </pre>
    </form>
    <?php
    if (isset($_POST) && !empty($_POST)) { /* !empty($_POST) = count($_POST) !== 0 */
        $select = $bdd->prepare("SELECT * FROM users WHERE username=? OR email=?"); // Avec cette commande on veille à ce qu'il ny'est pas plusieurs username et la meme adresse mail
        $select->execute(array($_POST['username'], $_POST['email'])); // Il ne faut pas qu'il y est deux fois la meme adresse mail et deux fois le meme pseudo
        $select = $select->fetchAll(); // fetch récupère une seul ligne alors que fetchAll récupère toute les lignes
        if (empty($select)) {
            $token = GenerateToken(50);

            $insert = $bdd->prepare('INSERT INTO users(prenom, nom, username, email, genre, password, token) VALUE (?, ?, ?, ?, ?, ?, ?);');
            $insert->execute(array(
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['username'], 
                $_POST['email'],        
                $_POST['genre'],
                sha1($_POST['password']),
                $token
            ));
            
            $msg = "Lien pour vérifier votre adresse mail : http://localhost/theovbl.github.io/connexion/verify.php?token=$token";
                SendEmail($_POST['email'], $msg, "Validation Adresse Mail", 'DWWM');

                header("Location: login.php?username=" . $_POST['username']);
        } else 
        echo '<script> alert("Ce pseudo est déja utilisé donc vous devez en utiliser un autre qui ne soit pas le même mais qui ne comporte pas de caractère spécial parce que ca ne peux pas fonctionner et donc si vous ne faite pas ca ne pourra toujours pas fonctioner parce que vous êtes vraiment nul !") </script>';
    }
    ?>
 <br><br><br><br><br><br><br><br><br><br>   
 <script>
        function ChangeValue() {
            let Password = document.getElementById('password')
            let confirmPassword = document.getElementById('confirm_password')
            
            if (Password.value == confirmPassword.value)                
                confirmPassword.setCustomValidity('')
            else                 
                confirmPassword.setCustomValidity('Les mots de passe doivent être identique')      
        }                   
    </script> 
</body>
</html>

