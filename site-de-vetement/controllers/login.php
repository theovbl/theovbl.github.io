<?php
    if (isset($_POST) && !empty($_POST)) {
        require_once('../inc/db.php');
        $user = $bdd->prepare('SELECT * FROM vetement WHERE user=?');
        $user->execute(array(
            $_POST['user']
        ));
        $user = $user->fetch();
        
        if (password_verify($_POST['password'], $user['password'])){
            session_start();
            $_SESSION = $user;
            header('Location: ../index.php');
        } else {
            echo '<script> alert("Mauvais mot de passe") </script>';
        }
    }
?>