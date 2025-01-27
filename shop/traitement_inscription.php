<?php
include 'includes/db.php';
include 'includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];

    $sql = "INSERT INTO utilisateurs (username, password, email) VALUES (:username, :password, :email)";
    $stmt = $bdd->prepare($sql);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur lors de l'inscription.";
    }
}
?>
