<?php
session_start();
if (empty($_SESSION)) header('Location: rclient.php');
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
          
            <li><a href="">Nos Enseignes </a></li>
            <li><a href="../sitechat/gerant.php">Espace Gérant </a></li>
           <li> <a href="deconnexion.php" class="deco">Me déconnecter</a></li>
           
        </ul>
        
    </nav>
   <br><br><br><br><br><br><br>
    <!-- <pre>
        <?php // var_dump($_SESSION); ?>
    </pre> -->
    <h1 class="user"> Bienvenue ! <?php echo $_SESSION['username'] ?> </h1>
    <p>Vous trouverez votre gestion de stock pour vos chats</p>
    <!-- 
        Vous allez devoir créer trois page une de connexion, une d'inscription et un page d'accueil avec des 
        lien hypertext et si possible réussir à faire afficher le nom et prénom de la personne 
    -->
   
<br><br><br><br><br><br><br>
<?php 
//ajout
$mess="";
$code=@$_POST['code'];
$nom=@$_POST['nom'];
$prix=@$_POST['prix'];
if(isset($_POST['bajout'])){
$exe1=mysqli_query($conn,"insert into produit values('$code','$nom','$prix')");
if($exe1){
   $mess="Ajout réussie !!";
}
else
   $mess="Echec ajout !!";
}

?>

<?php 
//suppression
if(isset($_POST['bsupp'])){
$exe2=mysqli_query($conn,"delete from produit where codeprod='$code'");
if($exe2){
   $mess="Suppréssion réussie !!";
}
else
   $mess="Echec suppréssion !!";
}

?>

<?php 
//modifier
if(isset($_POST['bmodif'])){
$exe3=mysqli_query($conn,"update produit set nomprod='$nom',prix='$prix' where codeprod='$code'");
if($exe3){
   $mess="Modification réussie !!";
}
else
   $mess="Echec modification !!";
}
?>
		
	<div align="center" >
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST"  >
  <table align="">
    <tr><td></td><td><?php echo $mess; ?></td></tr>
    <tr><td></td><td><strong >Nom du bar</strong></td></tr>
   <tr><td></td><td><input type="text" name="code" class="champ" size="25"  ></td></tr>
   
   <tr><td></td><td><strong>Nom du chat</strong></td></tr>
   <tr><td></td><td><input type="text" name="nom" class="champ" size="25"></td></tr>
   
   
  
  </table>
  
  <input type="submit" name="bajout" value="Ajouter" class="bouton" >
  <input type="submit" name="bsupp" value="Supprimer" class="bouton" >
  <input type="submit" name="bmodif" value="Modifier" class="bouton" >
  <input type="submit" name="brech" value="Recherche" class="bouton" >
  </form>
  <p><br></p>
  
  <?php 
//recherche

if(isset($_POST['brech'])&& !empty($code)){
$exe4=mysqli_query($conn,"select * from produit where codeprod='$code'");
if($exe4){
   print'<div style="overflow-x:auto;">';
	print'<table border="1" id="tbfich">';
	print'<tr><th>Code produit</th><th>Nom produit</th><th>Prix unitaire</th></tr>';
	while ($row = mysqli_fetch_assoc($exe4)){
	$codep=$row['codeprod'];
	$nomp=$row['nomprod'];
	$prix=$row['prix'];
	print'<tr>';
	print'<td>';
	     echo $codep;
	print'</td>';
	
	
	print'<td>';
	     echo 	$nomp;
	print'</td>';
	
		print'<td>';
	     echo 	$prix;
	print'</td>';
	
	print'</tr>';
		}
	print'</table >';
print'</div>';
}

}
?>
  

  </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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