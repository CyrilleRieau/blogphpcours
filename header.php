<?php
if (isset($_SESSION['user'])) {
    ?>
<form method="POST" action="inscription.php">
<label>Pseudo</label><input type="text" name="pseudo">
<label>Mot de passe</label><input type="password" name="mdp">
<button>Inscription</button>
</form>
<form method="POST" action="login.php">
<label>Pseudo</label><input type="text" name="pseudo">
<label>Mot de passe</label><input type="password" name="mdp">
<button>Connexion</button>
</form>
<?php 
} else {
    echo'User not connected'
;}
?>