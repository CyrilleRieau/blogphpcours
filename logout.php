<?php

session_start();
if (isset($_SESSION['user'])){
    $_SESSION = array();
session_destroy($_SESSion['user']);}
echo 'Vous êtes déconnecté.'
?>
<a href="index.php">Retour</a>