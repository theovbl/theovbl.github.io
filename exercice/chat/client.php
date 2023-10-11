<?php
require_once('db.php');
session_start();


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>gestion du stock</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
   
    <link rel="stylesheet" href="../chat/sitechat.css">
</head>
<body>
<nav>
        <span>
            <box-icon type='solid' name='cat' animation='spin' size='40px'></box-icon>Le Bar à Chat</span> 
        <ul>
           
            <li><a href="">Nos Enseignes </a></li>
            <li><a href="../chat/client.php">Espace Client </a></li>
            
           
        </ul>
       
    </nav> <br><br><br><br><br><br><br><br><br><br>
    <form action="" method="post">
        <pre>
            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" value="Se connecter">
            <a href="./register.php">Vous n'avez pas de compte ?</a>
        </pre>
    </form>
    <?php 
if (isset($_POST) && !empty($_POST)) {
    $select = $bdd->prepare('SELECT * FROM cat WHERE (username=:login OR email=:login) AND password=:pass');
    $select->execute(array(
        'login' => $_POST['username'],
        'pass' => sha1($_POST['password'])
    ));
    $select = $select->fetch(PDO::FETCH_ASSOC);
    if (!empty($select)) {
        $_SESSION = $select;
        header('Location: rclient.php');
    } else {
        echo "<script> alert('Le mot de passe ou le pseudo n'est pas bon') </script>";
    }
}

?><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<br><br><br><br><br><br><br><br><br>


<br><br><br><br><br><br><br><br>



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
        <span><box-icon name='phone'></box-icon>+33 6 05 26 85 42
        </span>

</footer>
</body>
</html>