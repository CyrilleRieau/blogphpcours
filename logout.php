<?php

session_start();
if (isset($_SESSION['user'])){
    $_SESSION = array();
session_destroy($_SESSION['user']);}
echo 'Vous êtes déconnecté.'
?>
<a href="index.php">Retour</a>