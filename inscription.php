<!-- 
        Faite un formulaire qui va permettre d'inscrire de nouveau code 
        dans la base de donnée vous devez mettre le nom et prénom 
        Si le nom de la personne est déja existant il n'est pas possible d'être intégrer                
     -->

<?php
require_once('./db.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="inscription.css">
    <title>Formulaire</title>
</head>
<body>
<form action="" method="post" class="formulaire">
    <fieldset class="fieldset">
    <label for="nom">Nom :</label>
    <input type="text" name="name">

    <label for="prenom">Prénom :</label>
    
    <input type="text" name="name" >
    
    <label for="Nom">Nom-d'utilisateur :</label>
    
    <input type="text" name="name">
    
    <label for="nom">Mot de passe :</label>
    
    <input type="password" name="name" >
    
    <label for="nom">Confirmation mot-de-passe :</label>
    
    <input type="password" name="name" > 
    
  <input type="submit" value="Entrez" class="entrez">
</fieldset>
</form>
<?php 

if (isset($_POST) && !empty($_POST)) { 
 

$insert = $bdd->prepare('INSERT INTO atm(firstname, lastname, identifiant, password, confirm) VALUES (?, ?, ?, ?, ?)');
$insert->execute(array(
    $_POST['firstname'],
    $_POST['lastname'],
    $_POST['identifiant'], 
    md5($_POST['password']),
    $_POST['confirm']
));
}
    ?>
</body>
</html>