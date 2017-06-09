<?php
if(!isset($_POST['pseudo']) || !isset($_POST['mdp'])) {
    echo 'Utilisateur inexistant.';
    exit(1);
}
if ($_POST['pseudo']=="" && $_POST['mdp']=="") {
    echo 'Utilisateur n\'est pas correct.';
    exit(1);
}
$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp=md5(htmlspecialchars($_POST['mdp']));
if(is_file('utilisateur/'.$pseudo.'.txt')) {
    $content = file_get_contents('utilisateur/'.$pseudo.'.txt');
    if ($content == $mdp) {
        session_start();
        $_SESSION['user']=$pseudo;
        echo 'Vous êtes bien connecté.';
    } else {
        echo 'Le mot de passe ou l\'utilisateur n\'est pas bon';
    } 
}
else {
    echo 'Le mot de passe ou l\'utilisateur n\'est pas bon.';
}
?>
<a href="index.php">Retour</a>