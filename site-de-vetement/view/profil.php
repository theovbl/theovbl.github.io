<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <title>Site de vetement</title>
</head>
<body>
<?php
        require_once('../inc/db.php');
        if (isset($_POST) && !empty($_POST)) {
            $select = $bdd->prepare('SELECT * FROM user WHERE id=?');
            $select->execute(array(
                $_POST['modify']
            ));
            $select = $select->fetch(PDO::FETCH_ASSOC);
        }
    ?>

    <header>
        <div class="header-span-site">mon site internet</div>
        <button class="header-span-register"><a href="./view/login.php">register/login</a></button>
    </header>     
    <nav>
        <ul>
            <li>Pulls</li>
            <li>Pantalons</li>
            <li>T-Shirts</li>
            <li>Pyjamas</li>
            <li>Parkas</li>
            <li>Vestes</li>
            <li>Cramptés</li>
        </ul>
    </nav>
 
  <section>
    <form action="function/RemoveCat.php" method="post">
    <pre>
            <label for="user">Nom d'utilisateur</label><br>
            <input type="text" name="user" value="<?php echo $select['user'] ?>"><br><br>

            <label for="email">Email</label><br>
            <input type="email" name="email" value="<?php echo $select['email'] ?>"><br><br>

            <label for="password">Mot De Passe :</label><br>
            <input type="password" name="password" value="<?php echo $select['password'] ?>"><br><br>
            
            <button name="modify" value="<?php echo $_POST['modify'] ?>">Modifier le profil</button>
        </pre>

    </form> 

        <table>
            <tr>
                <th>Identification :</th>
                <th>Prénom :</th>
                <th>Couleur :</th>
                <th>Description :</th>
                <th>Photo :</th>
            </tr>
            <?php
                $select = $bdd->prepare('SELECT * FROM vetement');
                $select->execute();
                $select = $select->fetchAll();
                if (!empty($select)) {
                    # Le foreach prend tout ce qui ce trouve dans $select et le range dans les variable $index qui sera l'index
                    # et valeur qui est son les valeur de l'index
                    foreach ($select as $valeur) {
                        $id = $valeur['id'];
                        $user = $valeur['user'];
                        $email = $valeur['email'];
                        $password = $valeur['password'];

                        echo "<tr> 
                            <td> $id </td>
                            <td> $prenom </td>
                            <td> $color </td>
                            <td> $description </td>
                            <td> $photo </td>
                            <td> <button name='veto' value='$id'>Vétérinaire</button> </td>
                            <td> <button name='transfer' value='$id'>Transferer</button> </td>
                            <td> <button name='delete' value='$id'>Supprimer</button> </td>
                        </tr>";
                    }
                }
            ?>
        </table>
    </form>


  </section>
    

  
</body>
</html>
