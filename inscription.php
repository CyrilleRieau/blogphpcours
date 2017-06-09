<?php
if(!isset($_POST['pseudo']) || !isset($_POST['mdp'])) {
    echo 'Utilisateur inexistant.';
    exit(1);
}
if ($_POST['pseudo']=="" && $_POST['mdp']=="") {
    echo 'Utilisateur ou mot de passe non correct.';
    exit(1);
}
$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = htmlspecialchars($_POST['mdp']);
$crypt = md5($mdp);
$crypt2 = sha1($mdp);
if(!is_dir("utilisateur")) {
    mkdir("utilisateur");
}
$new_file = fopen("utilisateur/".$pseudo.".txt", "w");
fwrite($new_file, $crypt);
fclose($new_file);
session_start();
$_SESSION['user']=$pseudo;
echo 'Bien inscrit';
?>
<a href="index.php">Retour</a>