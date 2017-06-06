<?php
if(isset($_POST['pseudo']) && isset($_POST['mdp'])) {
    $pseudo = $_POST['pseudo'];
    $mdp=md5($_POST['mdp']);

    if(is_file('utilisateur/'.$pseudo.'.txt')) {
        $content = file_get_contents('utilisateur/'.$pseudo.'.txt');
        if ($content == $mdp) {
            session_start();
$_SESSION['user']=$pseudo;
            echo 'Vous êtes bien connecté.';
        } else {
            echo 'Le mot de passe ou l\'utilisateur n\'est pas bon';
        } }
         else {
        echo 'Le mot de passe ou l\'utilisateur n\'est pas bon.';
    }
}