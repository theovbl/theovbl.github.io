<?php
session_start();
if (empty($_SESSION)) header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page D'accueil</title>
    <link rel="stylesheet" href="../sitechat/sitechat.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
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
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- <pre>
        <?php // var_dump($_SESSION); ?>
    </pre> -->
    <h1 class="user"> Bonjour, <?php echo $_SESSION['username'] ?> </h1>
    <!-- 
        Vous allez devoir créer trois page une de connexion, une d'inscription et un page d'accueil avec des 
        lien hypertext et si possible réussir à faire afficher le nom et prénom de la personne 
    -->
    <a href="deconnexion.php" class="deco">Se Déconnecter</a>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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