<?php
/*
Nous allons ici récupérer les données d'un utilisteur
pour l'inscrire à notre site.
L'inscription consistera à stocker dans un fichier
le mot de passe de l'utilisateur en question, encrypté
*/
if(isset($_POST['pseudo']) 
    && isset($_POST['mdp'])){
    //On récupère les variables
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    //On encrypte en md5 ou en sha1 (sha256 c'est mieux)
    $crypt = md5($mdp);
    $crypt2 = sha1($mdp);
    //On vérifie que le dossier utilisateur existe
    if(!is_dir("utilisateur")) {
        //sinon on le crée
        mkdir("utilisateur");
    }
    //On crée un nouveau fichier pour l'utilisateur
    $new_file = fopen("utilisateur/".$pseudo.".txt", "w");
    //On met son mdp encrypté dedans
    fwrite($new_file, $crypt);
    //on ferme le fichier
    fclose($new_file);
        session_start();
$_SESSION['user']=$pseudo;
    echo 'Bien inscrit';
}

/*
$file=scandir('utilisateur');
$user=$_POST['pseudo'];
$pwd=$_POST['mdp'];
$crypt=md5($pwd);

foreach($file as $u) {
    $content = file_get_contents('utilisateur/'.$u);
    if ($u.'.txt' === $user) {
        if ($content === $crypt) {
            echo 'User already created.';
        }
    }
}*/
?>
<a href="index.php">Retour</a>