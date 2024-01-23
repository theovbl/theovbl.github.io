<?php
    session_start();
    if (empty($_SESSION)) {
        header('Location: ../application.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <title>Bug</title>
</head>
<body>
    <form action="../controller/create_bug.php">
            <label for="owner">ton prenom mon chum 🤙</label>
            <input type="text" name="owner" id="owner">

            <label for="severity">LE degré de danger 1=(ça passe) 5=(Crise planetaire)</label>
            <select name="severity" id="severity">
                <option value="sev1">je suis le bug un peu sympa</option>
                <option value="sev2">je suis un peu plus chiant un peu comme un chihuahua</option>
                <option value="sev3">je suis le dédé un peu bourré</option>
                <option value="sev4">je suis julien</option>
                <option value="sev5">je suis le désastre de type oh raie lit 🖕</option>
            </select>

            <label for="summary">Sommaire 🤙</label>
            <input type="text" name="summary" id="summary">

            <label for="description">La description de ce magnifique bug</label>
            <input type="text" name="description" id="description">

            <input type="submit" value="❌">
    </form>
</form>
</body>
</html>