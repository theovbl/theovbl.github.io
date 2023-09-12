<?php
// Quand le fichier est lu on veux que le fichier db sois lu aussi
require_once('db.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cours Php</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php 
    echo "<p>Bonjour<p>";
    echo "<p>"."Bonjour"."</p>";
    // echo ça affiche quelque chose
    // J'affiche Bonjour sur ma page dans une balise p avec comme
    //classe test
    $cookie=10;
    //$=var/let
    // Je défini ma variable avec $ puis
    // Je lui donne le nom cookie
    //et je lui rentre la valeur 10
    $phrase="<br>Je suis une phrase"; //string
    $nombre=1.4; // float
    $choix=true; //Booléens
    /*
    Integer=> Nombre entier comme 50, 47, 874698
    Float => Nombre à virgule comme 74.58, 4.202848431, 1.0004
    String => Chaine de caractères comme
    "Bonjour"
    "Je code sur ordinateur"
    Booléens => true(vrai) ou false (faux)
    Array =>
    Indexés
    Associatif
    Null => NULL */
    echo $phrase;
    echo $titre;

// Les conditions 

$condition=false;

if ($condition) {
    echo "<br>Je passe ici donc c'est vrai";
} else {
    echo "<br>Je passe par la donc c'est faux";
}
$code = 4227;
// == Ca prend en compte que la variable sois égale
// === Ca prend en compte que la variable sois égale
// et du meme type
if ($code === 4227) { 
echo "Le code est correct";
} else {
    echo "Le code n'est pas correct";
}

$couleur = "bleu";
echo "<p>J'ai une autruche de couleur ". $couleur . "</p>";

$couleur = "gris";
if ($couleur == "rouge") { // Si
    echo "<p>J'ai une autruche de couleur rouge</p>";
} else if ($couleur == "bleu")  { // Sinon Si
    echo "<p>J'ai une autruche de couleur bleu</p>";
} else { // Si
    echo "<p> J'ai pas d'autruche</p>";
}

// Ecriture Ternaire

$a = 15;
$un = $a > 11 ? 1 : 0;
// Si $a supérieur à 11 alors $un est égale à 1 sinon il
// Sera égale à O

// Les Switch
$tailles = 20;

switch ($tailles) {
    case 120:
        echo "<p>Tu es atteint de nanisme.</p>";
        break;
        case 150:
            echo "<p>Tu es très petit(e)</p>";
            break;
            case 170:
                echo "<p>Tu a ine convenable</p>";
        break;
        case 200:
            echo "<p>Bonjour Monsieur ! </p>";
            default:
            echo "Tu n'existe pas !!";
}

// Les Tableaux
$tableau = [
42, // 0
 78, // 1
 48, // 2
 1486658, // 3 
 "Une Autruche" // 4
];
echo $tableau [2];

echo '<pre>'; // Rendre plus visible le tableau
var_dump($tableau); // Afficher l'intégralité du tableau
echo '</pre>';

$exo = [4, 12, 78, 98, 65];
$resultat = $exo[2] - ($exo[0] * $exo[1]);
$resultat = ($exo[3]- $exo[4])- ($exo[1] / $exo[0]); 
echo $resultat;
// 78 - (4 * 12 )
// (98 - 65) - (12 / 4)
// La valeur de £resultat doit etre égal à 30 en utilisant
// que les nombre qu'il ce trouve dans le tableau exo

// Tableaux Associatifs
$tab_assoc = [
    "voiture" => "volkswagen", // TYpe string
    "animal" => "Perroquet", // Type string
    "chiffre" => 10, // Type Integer
    "calvitie" => true, // Type Boolean
    "legumes" => null // Type Null
];
    // J'ai fait un tableau avec 5 valeurs qui ont une index
    // Que j'ai défini moi meme
    // Voiture est une index et volkswagen est sa valeur
    // Animal est une index et Perroquet est sa valeur
    // Ainsi de suite
    $tab_assoc['bras'] = false;
    // J'ai défini un nouvelle index bras avec comme valeur faux

    echo "<pre>"; 
    var_dump($tab_assoc);
    echo "</pre>"; 

    // Les boucles
    // LA boucle while
$o = 0;
while(true) {
    $o++;
    echo "<p>Je passe dans la boucle while</p>";
    if ($o == 10) {
        break;
        // Sert à casser la boucle pour pouvoir l'arreter
    }
}
// La boucle do-while
do {
    echo 'Je passe dans la boucle do-while';
} while (false);

// LA boucle for
for ($i=0; $i < 10; $i++) {
    echo "<br>Je suis passer " . $i+1 . " fois dans la boucle for";
}


/* 
 Créer un tableau Associatif en mettant une 
 index bras de type booléen et une index 
 jambe qui va être un integer
 */

 /* 
 Si il n'a pas de jambe ni de bras
     Tu es un e-tronc !
 Sinon si il n'a pas de bras
     Pas de bras pas de chocolat
 Sinon
     Tu es basique donc tu es nul
 */
    $tab_assoc = [
        "bras" => true,
        "jambe" => false,
 
    ];

    if ($phrase == "rouge") { 
        echo "<p>Si il n'a pas de jambe ni de bras
        Tu es un e-tronc !/p>";
    } else if ($phrase == "false")  { // Sinon Si
        echo "<p>Sinon si il n'a pas de bras
        Pas de bras pas de chocolat/p>";
    } else { // Sinon
        echo "<p> Sinon Tu es basique donc tu es nul</p>";
    }
    
    $tab_exo = [
        "bras" => true,
        "jambe" => 2
    ];
    // Le point d'exclamation (!) veut dire différent de
    // Exemple : Si bras est égale à vrai et
    // que je fais différent de il sera égale à faux
    if ($tab_exo['jambe']== 0 && !$tab_exo['bras'])
    echo "Tu es un e-tronc !";
    else if (!$tab_exo['bras'])
    echo "Pas de bras pas de chocolat";
    else echo"<p>Tu es basique donc tu es nul</p>";

    ?>
<br>
<form action="validation.php" method="post"> 
    <h1>Register</h1>
    <label for="firstname"> First name: </label>
    <br>
    <input type="text" name="firstname" id="first name">
    <br>
    <label for="Lastname"> Last name: </label><br>
    <input type="text" name="lastname" id="last name">
    <br>
    <label for="Email"> Email: </label><br>
    <input type="text" name="email" id="email">
    <br>
    <label for="Password:"> Password: </label><br> 
    <input type="password" name="password" id="first name">
    <br>
    <label for="Confirm password"> Confirm password: </label><br>
    <input type="password" name="confirmpassword" id="first name">
    <p>Gender:</p>
    <input type="radio" name="gender" id="gender" value="male">
    <label for="masculin">Male</label>
    <input type="radio" name="gender" id="gender" value="female">
    <label for="masculin">Female</label>
    <input type="radio" name="gender" id="gender" value="others">
    <label for="Other">Other</label>
    <br>
    <input type="submit" value="Submit">
</form>

<?php


   
     // Je prépare ma commande
        $select = $bdd->prepare('SELECT * FROM utilisateur WHERE gender= ?;');
        // Je l'execute en lui donnant une valeur à la place ?
        $select->execute(array("female"));
        // Je récupère tout ce que me renvoie ma commande
        $total = $select->fetchAll(PDO::FETCH_ASSOC);

        // Je l'affiche
        echo '<pre>';
        var_dump($total);
        echo '<pre>';

        // echo $total[2]['gender'];
   ?> 
<br><br><br><br><br>


<form action="" method="POST">
<fieldset>

    <label for="yourname">Your name</label>
    <input type="text" name="yourname" id="yourname">
    
    <label for="yourmail">Your mail</label>
    <input type="text" name="yourmail" id="yourmail">

    <label for="yourmessage">Your message</label>
    <textarea name="message" id="yourmessage" cols="30" rows="10"></textarea>
    <label for="givemeanumber">Give me a number !</label>
    <input type="text" name="givemeanumber" id="givemeanumber">
    <input type="submit" value="Envoyer"></fieldset>
</form>

<?php
 if (isset($_POST) && !empty($_POST)) { // $_GET
    echo  '<pre>'; var_dump($_POST); echo '</pre>';
    echo $_POST ['yourname'];
    // Sha1 Hash le mot c'est à dire
    // Le compléxifi et le rend ilisible
    // sha1 / md5
  

    // $insert = $bdd->prepare('INSERT INTO ok(yourname, yourmail, yourmessage, givemeanumber) VALUES (?, ?, ?, ?)');
    // $insert->execute(array(
    //     $_POST['yourname'],
    //     $_POST['yourmail'],
    //     $_POST['message'], 
    //     $_POST['givemeanumber'], 
    // ));

   
}

?>
 <br><br><br><br><br><br>
<form action="" method="post">
    <fieldset>
    <label for="name">Your Name:</label>
    <br>
    <input type="text" name="name" id="name">
    <br>
    <label for="mail">Your Mail</label>
    <br>
    <input type="email" name="mail" id="mail">
    <br>
    <label for="message">Your message</label>
    <br>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <br>
    <label for="number">Give me your number</label>
    <br>
    <input type="number" name="number" id="number">
    <br>
    <input type="submit" value="Envoyer">
</fieldset>
</form>

<?php   
    if(isset($_POST) && !empty($_POST)) {
        settype($_POST['number'], 'integer');
        $newmessage = $bdd->prepare('INSERT INTO messages(name, mail, message, number) VALUES (?, ?, ?, ?)');
        $newmessage->execute(array($_POST['name'], $_POST['mail'], $_POST['message'], $_POST['number']));
    }
    
    ?>
</body>
</html>