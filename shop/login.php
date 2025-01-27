<?php
include 'includes/header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Logique de vérification de l'utilisateur
    // Exemple : requête à la base de données pour valider les identifiants
}
?>
<div class="form-container">
    <h2 class="form-title">Connexion</h2>
    <form>
        <input type="text" class="input-field" placeholder="Nom d'utilisateur" required>
        <input type="password" class="input-field" placeholder="Mot de passe" required>
        <button type="submit" class="btn-submit">Se connecter</button>
        <a href="register.php" class="link">Créer un compte</a>
    </form>
</div>


