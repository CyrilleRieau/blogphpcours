<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier fichier</title>
</head>
<body>
<?php
if(isset($_POST['fichier']) 
        && isset($_POST['contenu'])) {
     $fileName = htmlspecialchars($_POST['fichier']);
    $content = htmlspecialchars($_POST['contenu']);
    if(is_file('posts/'.$fileName)) {
        $file = fopen('posts/'.$fileName, 'w');
        fwrite($file, $content);
        fclose($file);
        echo 'vous avez modifié le fichier.';
    }
    
}
if(isset($_GET['fichier'])) {
    $file = htmlspecialchars($_GET['fichier']);
    if(is_file('posts/'.$file)) {
        echo '<h2>'.basename($file, ".txt").'</h2>';
        $content = file_get_contents('posts/'.$file);
        echo '<form method="post" action="">';
        echo '<input type="hidden" name="fichier" '
        .'value="'.$file.'">';
        echo '<textarea name="contenu">'
                .$content.'</textarea>';
        echo '<button>Modifier</button>';
        echo '</form>';
    }
    
}
?>

<a href="index.php">Retour</a>


    
</body>
</html>