<?php
    require_once('../inc/db.php');
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM vetement WHERE id=?');
        $select->execute(array(
            $_POST['modify']
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);  

        if ($_POST['password'] == $select['password']) {
            $pass = $select['password'];
        } else {
            $pass = password_hash($_POST['password'], PASSWORD_ARGON2I);
        }

        $update = $bdd->prepare('UPDATE user SET user=?, email=?, password=? WHERE id=?');
        $update->execute(array(
            $_POST['user'],
            $_POST['email'],
            $_POST['password'],
            $_POST['modify']
        ));
        header('Location: ../index.php');
    } 
?>