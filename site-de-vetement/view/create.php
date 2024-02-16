<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <title>Login</title>
</head>
<body class="noir">
    <form action="../controllers/create.php" method="post" class="form">
            
    <h2>S'inscire</h2>
    <div class="gris">
    <label for="user" id="user">Nom d'utilisateur</label>
  <input type="text" name="user"><br><br>
            <label for="email" id="email">Adresse-Email</label>
  <input type="text" name="email"><br><br>
  <label for="password" id="password">Mot de passe</label>
  <input type="text" name="password"><br><br></div>
<button class="compte">Déja un compte ?</button><br><br>
 <button class="inscription">S'inscrire</button>
    </form>


    
</body>
</html>