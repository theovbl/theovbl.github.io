<?php
require_once('./db.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="../sitechat/sitechat.css">
</head>
<body>
     <nav>
        <span>
            <box-icon type='solid' name='cat' animation='spin' size='40px'></box-icon>Le Bar à Chat</span> 
        <ul>
            <li><a href="../sitechat/register.php">Inscription </a></li>
            <li><a href="">Nos Enseignes </a></li>
            <li><a href="../sitechat/gerant.php">Espace Gérant </a></li>
            <li><a href="../sitechat/caissier.php">Espace caissier </a></li>
            <li><a href="../sitechat/client.php">Espace client</a></li>        
           
        </ul>
    </nav>
<br><br><br><br><br><br>
<h1>Inscription à notre Bar</h1>
<br><br>
<p>Chèr(e) visiteur merci de bien vouloir vous inscrire via notre formulaire</p>
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
      

            <label for="gerant">Gérant :</label><input type="radio" name="genre" class="genre" value="g" required>
            <label for="client">Client  :</label><input type="radio" name="genre" class="genre" value="c" required>
            <label for="caissier">Caissier  :</label><input type="radio" name="genre" class="genre" value="a" required>
            <br>
            <input type="submit" value="S'inscrire">
            <a href="./login.php">Vous avez déjà un compte</a>
        </pre>
    </form>
    <?php
    if (isset($_POST) && !empty($_POST)) { /* !empty($_POST) = count($_POST) !== 0 */
        $select = $bdd->prepare("SELECT * FROM cat WHERE username=? OR email=?"); // Avec cette commande on veille à ce qu'il ny'est pas plusieurs username et la meme adresse mail
        $select->execute(array($_POST['username'], $_POST['email'])); // Il ne faut pas qu'il y est deux fois la meme adresse mail et deux fois le meme pseudo
        $select = $select->fetchAll(); // fetch récupère une seul ligne alors que fetchAll récupère toute les lignes
        if (empty($select)) {
        

            $insert = $bdd->prepare('INSERT INTO cat(nom, username, email, genre, password) VALUE (?, ?, ?, ?, ?);');
            $insert->execute(array(
                $_POST['lastname'],
                $_POST['username'], 
                $_POST['email'],        
                $_POST['genre'],
                sha1($_POST['password'])
           
            )); 
            
           

                header("Location: login.php?username=" . $_POST['username']);
        } else 
        echo '<script> alert("Ce pseudo est déja utilisé donc vous devez en utiliser un autre qui ne soit pas le même !") </script>';
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
                confirmPassword.setCustomValidity('Les mots de passe doivent être identiques')      
        }                   
    </script> 
 <footer>

<div class="logo">
        <div>
            <box-icon type='logo' name='facebook-circle' color='#00000' animation='spin'></box-icon>
            <box-icon name='twitter' type='logo' color='#00000' animation='spin'></box-icon>
            <box-icon name='linkedin-square' type='logo' color='#00000' animation='spin'></box-icon>
            <box-icon name='youtube' type='logo' color='#00000'animation='spin' ></box-icon>
        </div>
        
        <div class="page">
            <a href="">CGV</a>
            <a href="">Mentions légales</a>
            <a href="">Nos Enseignes</a>
        </div>
        <span><box-icon type='solid' name='contact'></box-icon>+33 6 05 26 85 42
        </span>

</footer>
</body>
</html>

