<?php
session_start(); // Démarre une nouvelle session ou reprend une session existante.

function validate_input($data) {
    return htmlspecialchars(stripslashes(trim($data))); // Fonction pour valider et assainir les données d'entrée.
}

$valid_username = "Salif"; // Nom d'utilisateur valide pour la connexion.
$valid_password = "password"; // Mot de passe valide pour la connexion.

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Vérifie si la requête est de type POST.
    $username = validate_input($_POST['username']); // Valide et assainit le nom d'utilisateur.
    $password = validate_input($_POST['password']); // Valide et assainit le mot de passe.

    if ($username === $valid_username && $password === $valid_password) { // Vérifie si les identifiants sont corrects.
        $_SESSION['username'] = $username; // Stocke le nom d'utilisateur dans la session.
        setcookie('username', $username, time() + (86400 * 30), "/"); // Crée un cookie pour le nom d'utilisateur valable 30 jours.
        header("Location: index.php"); // Redirige vers la page d'accueil.
        exit(); // Arrête l'exécution du script.
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect."; // Affiche un message d'erreur si les identifiants sont incorrects.
    }
} 
?>
