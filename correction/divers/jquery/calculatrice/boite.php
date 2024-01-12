<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="jquery-3.7.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boite</title>
</head>
<body>
    <div class="grand">
        <div class="petit1"></div>
        <div class="petit2"></div>
        <div class="petit3"></div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <button id="button1" type="button">Activer/Désactiver la couleur</button>
    <button id="button2" type="button">Activer/Désactiver les bords arrondis</button>
    <button id="button3" type="button">Ajouter une nouvelle boite</button>
</div>
<script>
$(document).ready(function() {
    $("#button1").click(function() {
        $(".grand").toggleClass("active1");
        
    });
    $("#button2").click(function() {
        $(".grand").toggleClass("active2");
        
    });
});
</script>
<style>
    .grand {
        width: 100px;
        height: 100px;
        background-color: blue;
       
        display: flex;
    }
    .active1 {
        background-color: transparent; /* Changer la couleur en fonction de vos besoins */
         /* Changer la couleur du texte en fonction de vos besoins */
    }

    

        .active2 {
         /* Changer la couleur en fonction de vos besoins */
        color: white;
        border-radius: 10px; /* Changer la couleur du texte en fonction de vos besoins */
    }
</style>
</body>
</html>