<!DOCTYPE html>
<html>
<head>
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <form method="post" action="">
        <input type="text" name="display" id="display" value="<?php echo isset($_POST['display']) ? $_POST['display'] : ''; ?>" readonly>
        <br>
        <button type="submit" name="number" value="7">7</button>
        <button type="submit" name="number" value="8">8</button>
        <button type="submit" name="number" value="9">9</button>
        <button type="submit" name="operator" value="+">+</button>
        <br>
        <button type="submit" name="number" value="4">4</button>
        <button type="submit" name="number" value="5">5</button>
        <button type="submit" name="number" value="6">6</button>
        <button type="submit" name="operator" value="-">-</button>
        <br>
        <button type="submit" name="number" value="1">1</button>
        <button type="submit" name="number" value="2">2</button>
        <button type="submit" name="number" value="3">3</button>
        <button type="submit" name="operator" value="*">*</button>
        <br>
        <button type="submit" name="number" value="0">0</button>
        <button type="submit" name="clear" value="C">C</button>
        <button type="submit" name="calculate" value="=">=</button>
        <button type="submit" name="operator" value="/">/</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['number'])) {
            $display = $_POST['display'] . $_POST['number'];
        } elseif (isset($_POST['operator'])) {
            $display = $_POST['display'] . ' ' . $_POST['operator'] . ' ';
        } elseif (isset($_POST['clear'])) {
            $display = '';
        } elseif (isset($_POST['calculate'])) {
            $display = eval("return " . $_POST['display'] . ";");
        }

        echo '<script>';
        echo 'document.getElementById("display").value = "' . $display . '";';
        echo '</script>';
    }
    ?>
    <br><br><br>

    <form action="" method="post">

    <input type="text" name="display" id="display"><br>
    <button type="submit" name="un">1</button>
    <button type="submit" name="deux">2</button>
    <button type="submit" name="trois">3</button>
    <button type="submit" name="quatre">4</button><br>
    <button type="submit" name="cinq">5</button>
    <button type="submit" name="six">6</button>
    <button type="submit" name="sept">7</button>
    <button type="submit" name="huigt">8</button><br>
    <button type="submit" name="neuf">9</button>
    <button type="submit" name="plus">+</button>
    <button type="submit" name="moins">-</button>
    <button type="submit" name="diviser">/</button><br>
    <button type="submit" name="multiplier">*</button>
    <button type="submit" name="pourcentage">%</button>
    <button type="submit" name="plus">+</button>
    <button type="submit" name="moins">=</button><br>



    </form>
</body>
</html>