<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
    <title>Horloge</title>
</head>

 <!--Faites un minuteur numérique
    On doit pouvoir changer le temps qu'il dur 
    avec un formulaire -->

<body>
    <p id="minuteur">00:00:00</p>
    <form action="" method="post">
    <label for="heure">Heure(s) :</label>
    <input type="number" name="heure" id="heure" value=0 min=0 
    lenght=2>

    <label for="minute">Minute(s) :</label>
    <input type="number" name="minute" id="minute" value=0 min=0 max=59 lenght=2>

    <label for="seconde">Seconde(s) :</label>
    <input type="number" name="seconde" id="seconde" value=15 min=0 max=59 lenght=2>

    <input type="submit" value="Régler">
    <button type="button" id="pause" onclick="PauseTimer()">Pause</button>
    <button type="button" id="play">Play</button>
    <button type="button" id="reset" onclick="ResetTimer()">Reset</button>
</form>


<?php

 echo '<script>
var heure = ' . (!empty($_POST["heure"]) ? $_POST["heure"] : '0') . ' /*pour insérer le bout de code et mettre le formulaire*/
var minute = ' . (!empty($_POST["minute"]) ? $_POST["minute"] : '0') . '
var seconde = ' . (!empty($_POST["seconde"]) ? $_POST["seconde"] : '0') . '
function affichage() {
    document.getElementById("minuteur").innerHTML=
    `${(heure < 10 ? "0" : "") + heure}:${(minute < 10 ? "0" : "") + minute}:${(seconde < 10 ? "0" : "") + seconde}`
}
function timer() {
    affichage()
    if (seconde <= 0 && minute <= 0 && heure <= 0) return

    if (seconde == 0) {
        if (minute > 0) {
            seconde = 59
            minute--
        } else {
            if (heure > 0) {
                heure--
                minute = 59
                seconde = 59
            }                        /*ParseInt c"est pour arrondir les décimales au lieu de 13,5 c"est 13 */
        }
    }
        seconde--
    }
    var Interval = setInterval(timer, 1000)
    function PauseTimer () {
        clearInterval(Interval)
        interval = null
        document.getElementById("minuteur").style.opacity = "0.5" 
    }
    function ResetTimer () {
        heure = 0
        minute = 0
        seconde = 0
    }  
    
    document.getElementById("play").addEventListener("click", function() { 
        if (interval == null) {
            interval = setInterval(timer, 1000)
            document.getElementById("minuteur").style.opacity = "1" 
        }

    })
    
</script>';

?>
<!-- <script>
        var heure =23
        var minute =59
        var seconde =59;
        setInterval(function() {
            document.getElementById('minuteur').innerHTML=
             `${(heure < 10 ? '0' : '') + heure}:${(minute < 10 ? '0' : '') + minute}:${(seconde < 10 ? '0' : '') + seconde}`
            if (seconde <= 0) return
            seconde--
                if (seconde == 0) {
                    if (minute > 0) {
                    seconde = 59
                    minute--
                } else {
                    if (heure > 0) {
                        heure--
                        minute = 59
                        seconde = 59
                    }                        /*ParseInt c'est pour arrondir les décimales au lieu de 13,5 c'est 13 */
                }
            }
        }, 1000)

</script> -->
<br><br><br><br><br><br><br><br>

    
 

</body>
</html>