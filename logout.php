<?php

session_start();
if (isset($_SESSION['user'])){
    $_SESSION = [];
    session_destroy();
}
echo 'Vous êtes déconnecté.'
?>
<a href="index.php">Retour</a>