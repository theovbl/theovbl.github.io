<?php
session_start();
if (empty($_SESSION)) header('Location: rcaissier.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page D'accueil</title>
    <link rel="stylesheet" href="../chat/sitechat.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
<nav>
     <span>
            <box-icon type='solid' name='cat' animation='spin' size='40px'></box-icon>Le Bar à Chat</span> 
        <ul>
            
            <li><a href="">Nos Enseignes </a></li>
          
            <li><a href="../chat/caissier.php">Espace caissier </a></li>
            <li> <a href="deconnexion.php" class="deco">Me déconnecter</a></li>
           
        </ul>
        
    </nav>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- <pre>
        <?php // var_dump($_SESSION); ?>
    </pre> -->
    <h1 class="user"> Bonjour, <?php echo $_SESSION['username'] ?> </h1>
    <p>Vous trouverez votre gestion de stock pour vos chats</p>

    <form action="" method="POST">
    <pre>
    <label for="name">Nom du chat : </label>
    <input type="text" required> <br>
    <label for="name">Ajouté une resérvation :</label>
    <input type="date" name="quantity" required><br>
    <label for="name">Modifié les horraires de réservation :</label><br>
    
         <button> Cliquez ici !</button></pre>
   </form>

<?php





if (isset($_POST) && !empty($_POST)){
$insert = $bdd->prepare('INSERT INTO stock(reservation) VALUE (?);');
         $insert->execute(array(
            $_POST['reservation'],)
           
        );

// Execute the query
if ($insert->rowCount()) {
    echo "Vous avez ajouté une réservation de chat!";
} else {
    echo "Error: " ; 
}
}
?>


?>
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