<?php
session_start(); // Démarre une nouvelle session ou reprend une session existante.
if (isset($_SESSION['username']) || isset($_COOKIE['username'])) { // Vérifie si l'utilisateur est déjà connecté via session ou cookie.
    header("Location: index.php"); // Redirige vers la page d'accueil si l'utilisateur est déjà connecté.
    exit(); // Arrête l'exécution du script.
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="process_login.php" method="post"> <!-- Formulaire de connexion qui envoie les données à process_login.php via la méthode POST. -->
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required> <!-- Champ de saisie pour le nom d'utilisateur. -->
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required> <!-- Champ de saisie pour le mot de passe. -->
        <button type="submit">Se connecter</button> <!-- Bouton pour soumettre le formulaire. -->
    </form>
</body>
</html>
