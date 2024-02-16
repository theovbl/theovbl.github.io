<?php
require_once('../inc/db.php');

if (isset($_POST) && !empty($_POST)) {
    $insert = $bdd->prepare('INSERT INTO vetement (user, email, password) VALUES (?, ?, ?)');
    $insert->execute(array(
        $_POST['user'],
        $_POST['email'],
        password_hash($_POST['password'], PASSWORD_ARGON2I),
    ));
    header('Location: ../index.php');
};

?>