<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon super blog</title>
</head>
<body>
    <h1>Mon super blog !</h1>
    <a href="create.html">Ajouter</a>
    <?php

require_once ('header.php');
if (!is_dir("posts")){
mkdir("posts");
}
$files = scandir("posts");
    foreach($files as $file) {
        if (is_dir($file)) {
            continue;
        }
        echo '<h2>'.basename($file, ".txt").'</h2>';
        $content = file_get_contents('posts/'.$file);
        echo '<p>'.$content.'</p>';
        echo '<form method="post" action="delete-file.php"><input type="hidden" name="fichier" value="' . $file . '"><button>Supprimer</button></form>';
        echo '<a href="change-file.php?fichier='
                .$file.'">Modifier</a>';
    }
    
?>
</body>
</html>