<!-- 
        Faite un formulaire qui va permettre d'inscrire de nouveau code 
        dans la base de donnée vous devez mettre le nom et prénom 
        Si le nom de la personne est déja existant il n'est pas possible d'être intégrer                  -->
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
    <a href="atmindex.php">Page D'accueil</a> <!-- On ajoute dans la page d'accueil un lien-->
    <a href="atm.php">Connexion</a>

    <form action="" method="post"><!-- La balise post va nous permettre de communiquer avec php-->
        <pre> <!-- Pré c'est pour saulter des lignes automatiquement -->
            <label for="name">Prénom :</label>
            <input type="text" name="name" id="name" required> <!-- required: Obligé de remplir ses champs automatiquement -->
            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" id="lastname" required> <!-- required: Obligé de remplir ses champs automatiquement -->
            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username" required> <!-- required: Obligé de remplir ses champs automatiquement -->
            <label for="password">Code :</label>
            <input type="password" name="password" id="password" required pattern="^[0-9]{4}" maxlength=10> <!-- pattern="^[0-9]{4}" ça  veut dire que on peut rentrer comme valeur des majuscules de a à z jusqu'à 4-->
            <label for="confirm_password">Confirmation du code :</label>
            <input type="password" name="confirm_password" id="confirm" onchange="modifyPassword()" required pattern="^[0-9]{4}" maxlength=4> <!-- maxlenght/ c'est pour maximum 4 caractères à remplir obligatoirement pour le mot de mats -->
            <br>
            <input type="submit" value="Créer l'utilisateur">
        </pre>
    </form>
<?php
    if (isset($_POST) && !empty($_POST)) {  //La variable post est défini donc c'est vrai // &&! empty est différent, empty est vide donc c'est vrai  (si il n'avait pas eu le point d'exclamation c'est faux)
       // (on va pouvoir communiquer avec la balise post au niveau du formulaire) attention GET EST plus commercant pour la donnée il affiche plus coté client que post qui est plus coté serveur
        $select = $bdd->prepare('SELECT * FROM atm WHERE username=?');  // On séléectionne tous de atm dans username  (étoile veut dire tous)
        $select->execute(array( $_POST['username']));//On execute cette cette donnée dans un tableau username
        $select = $select->fetchAll();//ce que nous avons sélectionné est rangé dans un tableau qui est fetchall fecthall renvoie vers un tableau. On récupère les lignes de la base données
        if (count($select) <= 0) {        // si la largeur du tableau fetchall est inférieur ou égal à 0.                             
             $insert = $bdd->prepare('INSERT INTO atm(prenom, nom, username, code) VALUES (?, ?, ?, ?)');// on insert dans la base de donnée atm, le prénom, nom, username, code) valeur ????
            $insert->execute(array( // on range la donnée dans un tableau nom, lastname, username, password
              $_POST['name'],
              $_POST['lastname'],
            $_POST['username'],
             sha1($_POST['password']), // On hache le mot de passe dans la base de données mysql
             ));
            } else { // sinon
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