<?php
session_start();
session_unset(); //Effacer les cookies en gros (des traces / des données)
session_destroy();
header('location:index.php');
?>