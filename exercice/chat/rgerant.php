<?php
require_once('./db.php');
session_start();
if (empty($_SESSION)) header('Location: rgerant.php');
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
            <li><a href="deconnexion.php" class="deco">Me Déconnecter</a></li>
            <li><a href="">Nos Enseignes </a></li>
            <li><a href="../chat/gerant.php">Espace Gérant </a></li>
                   
           
        </ul>
        
    </nav>
   <br><br><br><br><br><br><br><br><br><br><br>
    <!-- <pre>
        <?php // var_dump($_SESSION); ?>
    </pre> -->
    <h1 class="user"> Bienvenue, <?php echo $_SESSION['username'] ?>  </h1>
    <p>Vous trouverez votre gestion de stock pour vos chats</p>
    

    
<br><br><br><br><br><br><br><br><br>

   
    
    <form action="rgerant.php" method="POST">
       
    <label for="name">Non du chat :</label>
    <input type="text" name="name" required><br>

        <label for="description">Description:</label>
        <textarea name="description"></textarea><br>

        <label for="quantity">Quantité :</label>
        <input type="number" name="quantity" required><br>
        <label for="price">Prix :</label>
        <input type="text" name="price" required><br>
        <label for="price">Stock total :</label>
        <input type="text" name="stock" ><br>

        <input type="submit" value="Ajouter à mon stock">
        <input type="submit" value="Modifé la description">
        <input type="submit" value="Supprimer le stock">
</form>
    

<?php





    if (isset($_POST) && !empty($_POST)){
    $insert = $bdd->prepare('INSERT INTO stock(name, description, quantity, price) VALUE (?, ?, ?, ?);');
             $insert->execute(array(
                $_POST['name'],
                $_POST['description'], 
                $_POST['quantity'],        
                $_POST['price'],)
            );

    // Execute the query
    if ($insert->rowCount()) {
        echo "Stock ajouté!";
    } else {
        echo "Error: " ; 
    }
}


if (isset($_POST) && !empty($_POST)) {
    $update = $bdd->prepare('UPDATE stock SET description=? ');
    $update->execute(array(
    $_POST['description'], )

    );
    if ($insert->rowCount()) {
        echo $_SESSION['username'] . "Mofification effectué !";
    } else {
        echo "Error: " ; 
    }
}

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  
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