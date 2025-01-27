<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Vérification des mots de passe
    if ($password === $confirm_password) {
        // Logique d'inscription (ajout à la base de données)
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Mon E-Commerce</title>
</head>
<div class="form-container">
    <h2 class="form-title">Inscription</h2>
    <form>
        <input type="text" class="input-field" placeholder="Nom d'utilisateur" required>
        <input type="email" class="input-field" placeholder="Email" required>
        <input type="password" class="input-field" placeholder="Mot de passe" required>
        <button type="submit" class="btn-submit">S'inscrire</button>
        <a href="register.php" class="link">Déjà inscrire ?</a>
    </form>
</div>
