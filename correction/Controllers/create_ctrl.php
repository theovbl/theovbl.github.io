<?php
require_once('db.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
  
    <title>Document</title>
</head>
<body>
    
<form action="" method="post"> 
        <pre> 
           
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" required>
            <br>
            <br>
            <label for="password">Mot de passe :</label>
            <input type="password" name="mot_de_passe" id="mot_de_passe" required>
            <br>   
            <br>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea> <br>
            <input type="submit" value="S'inscrire">
        </pre>
    </form>
</form>
<?php
if (isset($_POST) &&!empty($_POST)) { 
   $insert = $bdd->prepare('INSERT INTO user(pseudo, mot_de_passe, description) VALUE (?, ?, ?);');
   $insert->execute(array(
       $_POST['pseudo'],
       sha1($_POST['mot_de_passe']),
         $_POST['description'],
   ));
}
?>
</body>
</html>