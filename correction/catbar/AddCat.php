<?php 
// Dans la base de donner nous aons ajouté vrai ou false pour reserver, veto, transfer
// Les booléens sont en tel que défini 0 par défault elles sont fasles
require_once('../catbar/function/dbcat.php');

function Chatleatoire() { // on range tout dans la function Chatleatoire
$chaine = '1234567890'; // On créer une chaine qui va de 1 jusqu'a 9 chiffres
return substr(str_shuffle(str_repeat($chaine, 15)), 0, 15);
}
//substr( ca va permettre de découper de 0 à 15
//str_shuffle( On mélange avec cette fonction
 //str_repeat On répéte et après les chiffres vont jusqu'a 15 chiffres avec 0 à 15

 function TestID($bdd) {     
    $id = Chatleatoire();
    $select = $bdd->prepare('SELECT * FROM cat WHERE id=?');
    $select->execute(array(
        (int)$id
    ));
    $select = $select->rowCount();
    if ($select > 0) {
        TestID($bdd);
    }
    return $id; // On arrete la fonction et on renvoie Id
}
if (isset($_POST) && !empty($_POST)) {
    
 
    $insert = $bdd->prepare('INSERT INTO cat (id, prenom, color, photo, description, sexe) VALUES (?, ?, ?, ?, ?, ?)');
    $insert->execute(array(
        (int)TestID($bdd),
        $_POST['prenom'],
        $_POST['color'],
        $_POST['photo'],
        $_POST['desc'],
        $_POST['sexe']
    ));
    



















   header('Location: paneladmin.php'); 
}

