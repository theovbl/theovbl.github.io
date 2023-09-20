<?php
// Si method post rentrer dans le formulaire il faut
// Utiliser $_POST
// Sinon si la method get est rentrer dans le formulaire il 
// FAut utiliser $_GET
// La fonction isset sert à regarder si la variable qui lui
// est donner est bien défini dans ce cas si elle regarde
// Si la variable $_POST est défini
require_once('db.php');

if (isset($_POST) && !empty($_POST)) { // $_GET
        echo  '<pre>'; var_dump($_POST); echo '</pre>';
        echo $_POST ['firstname'];
        // Sha1 Hash le mot c'est à dire
        // Le compléxifi et le rend ilisible
        // sha1 / md5
        echo sha1($_POST['password']) . "<br>";
        echo md5($_POST['password']);

        $insert = $bdd->prepare('INSERT INTO utilisateur(firstname, lastname, email, password, gender) VALUES (?, ?, ?, ?, ?)');
        $insert->execute(array(
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'], 
            md5($_POST['password']),
            $_POST['gender']
        ));

        header('Location: index.php'); // renvoie de page (Localisation du fichier)
       
    }