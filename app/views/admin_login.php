<?php
// Démarrer la session pour suivre l'état de la connexion de l'admin
session_start();

// Vérifier si le formulaire a été soumis (méthode POST)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les valeurs du formulaire
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    // Se connecter à la base de données
    $pdo = new PDO('mysql:host=localhost;dbname=perfor_+', 'root', '');

    // Préparer une requête SQL pour vérifier l'admin avec l'email
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE email = :email");

    // Exécuter la requête avec l'email de l'admin
    $stmt->execute(['email' => $email]);

    // Récupérer les résultats
    $admin = $stmt->fetch();

    // Vérifier si un admin avec cet email existe et si le mot de passe est correct
    if ($admin && password_verify($mot_de_passe, $admin['mot_de_passe'])) {
        // Si les identifiants sont corrects, stocker l'ID de l'admin dans la session
        $_SESSION["admin_id"] = $admin["id"];
        // Rediriger vers le tableau de bord de l'admin
        header("Location: admin_dashboard.php");
        exit;
    } else {
        // Si l'authentification échoue, afficher un message d'erreur
        echo "Identifiants incorrects";
    }
}
?>

<!-- Formulaire HTML de connexion -->
<form method="post">
    <!-- Champ pour l'email de l'admin -->
    <input type="email" name="email" placeholder="Email admin" required><br>
    <!-- Champ pour le mot de passe de l'admin -->
    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required><br>
    <!-- Bouton pour soumettre le formulaire -->
    <button type="submit">Connexion</button>
</form>
