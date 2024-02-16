<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <title>Login</title>
</head>
<body class="noir">
    <form action="../controllers/login.php" method="post" class="form">
            
    <h2>Connexion</h2>
    <div class="co">
    <div class="name"><label for="user" id="user">Nom d'utilisateur</label>
  <input type="text" name="user"><br><br></div>
            
            <div class="name"><label for="password" id="password">Mot de passe</label>
            <input type="text" name="password"><br><br></div></div>
            <button class="compte"><a href="../view/create.php">Aucun compte ?</a></button><br><br>
            <button class="connecter">se connecter</button>
       
    </form>
</body>
</html>