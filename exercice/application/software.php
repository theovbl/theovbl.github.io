<?php
require_once('connexion.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="function/AddBug.php" class="" method="post">
        <table>
            <tr>
                <th>Identification du software:</th>
                <th>Nom :</th>
                <th>Contact :</th>
                <th>Version :</th>
                <th>Description :</th>
            </tr>
            <?php
                $select = $bdd->prepare('SELECT * FROM software');
                $select->execute();
                $select = $select->fetchAll();
                if (!empty($select)) {
                    # Le foreach prend tout ce qui ce trouve dans $select et le range dans les variable $index qui sera l'index
                    # et valeur qui est son les valeur de l'index
                    foreach ($select as $valeur) {
                        $id = $valeur['id'];
                        $name = $valeur['name'];
                        $contact = $valeur['contact'];
                        $version = $valeur['version'];
                        $description = $valeur['description'];
                      

                        echo "<tr> 
                            <td> $id </td>
                            <td> $name </td>
                            <td> $contact </td>
                            <td> $version </td>
                            <td> $description </td>
                            <td> <button name='submit' value='$id'>Submit</button> </td>
                        </tr> ";
                    }
                }
            ?>
        </table>
    </form>
    <form action="function/SubmitSoftware.php" class="" method="post">
        <table>
            <tr>
                <th>Identification du Component :</th>
                <th>Nom :</th>
                <th>Contact :</th>
                <th>Version :</th>
                <th>Description :</th>
            </tr>
            <?php
                $select = $bdd->prepare('SELECT * FROM component');
                $select->execute();
                $select = $select->fetchAll();
                if (!empty($select)) {
                    # Le foreach prend tout ce qui ce trouve dans $select et le range dans les variable $index qui sera l'index
                    # et valeur qui est son les valeur de l'index
                    foreach ($select as $valeur) {
                        $id = $valeur['id'];
                        $name = $valeur['name'];
                        $contact = $valeur['contact'];
                        $description = $valeur['description'];
                      

                        echo "<tr> 
                            <td> $id </td>
                            <td> $name </td>
                            <td> $contact </td>
                            <td> $description </td>
                         
                        </tr> <br>";
                    }
                }
            ?>
        </table>
    </form>
    <form action="function/SubmitSoftware.php" class="" method="post">
        <table>
            <tr>
                <th>Identification du Package:</th>
                <th>Nom :</th>
                <th>Contact :</th>
                <th>Version :</th>
                <th>maintainer :</th>
                <th>Description :</th>
            </tr>
            <?php
                $select = $bdd->prepare('SELECT * FROM package');
                $select->execute();
                $select = $select->fetchAll();
                if (!empty($select)) {
                    # Le foreach prend tout ce qui ce trouve dans $select et le range dans les variable $index qui sera l'index
                    # et valeur qui est son les valeur de l'index
                    foreach ($select as $valeur) {
                        $id = $valeur['id'];
                        $name = $valeur['name'];
                        $version = $valeur['version'];
                        $maintainer = $valeur['maintainer'];
                        $description = $valeur['description'];
                      

                        echo "<tr> 
                            <td> $id </td>
                            <td> $name </td>
                            <td> $version </td>
                            <td> $maintainer </td>
                            <td> $description </td>
           
                        </tr> <br>";
                    }
                }
            ?>
        </table>
    </form>

</body>
</html>