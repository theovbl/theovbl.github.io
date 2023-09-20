<?php
require_once('./db.php') //On va se connecter à la page db.php qui se connecte à mysql avec le bout de code
                         // que nous avons insérer
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ATM</title>
    <link rel="stylesheet" href="atm.css">
</head>
<body>
    <section>
        <form action="" method="post">
            <span class="num" id="texte">
                <input type="password" name="number" id=invisible readonly>
                <input type="text" id='affiche' readonly> <!--Readonly c'est pour une lecture seul, c'est pour enlever le text-->
            </span>
            <div class="num">1</div>
            <div class="num">2</div>
            <div class="num">3</div>
            <div class="num" id="reject">Decliner<p class="red"></p></div>
            <div class="num">4</div>
            <div class="num">5</div>
            <div class="num">6</div>
            <div class="num" id="erase">Effacer<p class="yellow"></p></div>
            <div class="num">7</div>
            <div class="num">8</div>
            <div class="num">9</div>
            <button type="submit" class="num">Entrez<p class="green"></p></button> 
            <!-- Ce bouton va me servir à relier la base de donnée-->
            <div class="num" id='calcul-'>-</div>
            <div class="num">0</div>
            <div class="num" id='caclul+'>+</div>
        </form>
    </section>
    <?php 
        if (isset($_POST) && !empty($_POST)) { // isset c'est une fonction php comme empty, $_Post est une variable php
           // echo '<pre>'; var_dump($_POST); echo '</pre>'; // var dump est pour afficher le tableau
           $select = $bdd->prepare('SELECT code FROM atm WHERE code=?');//On prépare à mysql (select,from,where c'est des commande mysql)
           $select->execute(array( //On éxécute
               $_POST['number']
           ));
           $select = $select->fetchAll();
           if (count($select) > 0) 
               echo '<script> alert("Le code est bon") </script>';
           else 
               echo "<script> alert('Le code n\'est pas bon') </script>";
            }
    ?>
    <script>
             var button = document.getElementsByClassName('num')

for (let index = 0; index < button.length; index++) {
    if (button[index].id.length > 0 || button[index].type == 'submit') continue
    button[index].addEventListener('click', function() {
        var input = document.getElementById('affiche')
        var span = document.getElementById('invisible')
        if (input.value.length == 4) {
            input.value = ""
            span.value = ""
            return
        }
        span.value += button[index].innerHTML
        input.value += '*'
    })
}
function Stop() {
    document.getElementById('affiche').value = ''
    document.getElementById('invisible').value = ''
}
document.getElementById('reject').addEventListener('click', Stop)
document.getElementById('erase').addEventListener('click', Stop)


                //addEventListener c'est pour créer un événement
                // On stocke tous les élément qui ont num dans un tableau
                //  for est une boucle, index est créer dans la boucle
                 // getElementById c'est une fonction qui récupère l'élément
                 // return: c'est comme un break
                // innerhtml sélectionne tous les  éléments dans html (tous ce qui est
                 // visible  le text, les numéros en gros 
    </script>
</body>
</html>