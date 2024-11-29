<?php
session_start(); // Démarre une nouvelle session ou reprend une session existante.
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) { // Vérifie si l'utilisateur n'est pas connecté via session ou cookie.
    header("Location: login.php"); // Redirige vers la page de connexion si l'utilisateur n'est pas connecté.
    exit(); // Arrête l'exécution du script.
}
$username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username']; // Récupère le nom d'utilisateur depuis la session ou le cookie.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue, <?php echo htmlspecialchars($username); ?>!</h1> <!-- Affiche un message de bienvenue avec le nom d'utilisateur. -->
    <a href="logout.php">Déconnexion</a> <!-- Lien pour se déconnecter. -->
</body>
</html>
