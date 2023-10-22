<?php
$bdd = new PDO ('mysql:host=localhost;dbname=cours;charset=utf8','THEO','Azerty123'); 
// Connexion à la base de donnée mysql avec ses identifiants
$("#effacertout").click(function(){
    $("#listeB option").appendTo("#listeA");
});
$("#ajouterTout").click(function(){
    $("#listeA option").appendTo("#listeB");
});