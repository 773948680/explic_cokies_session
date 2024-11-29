<?php
session_start(); // Démarre une nouvelle session ou reprend une session existante.
session_unset(); // Libère toutes les variables de session.
session_destroy(); // Détruit la session.
setcookie('username', '', time() - 3600, "/"); // Expire le cookie en le définissant avec une date passée.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Déconnexion</title>
</head>
<body>
    <p>Au revoir ! Vous avez été déconnecté.</p> <!-- Message d'au revoir après la déconnexion. -->
    <a href="login.php">Se reconnecter</a> <!-- Lien pour se reconnecter. -->
</body>
</html>
