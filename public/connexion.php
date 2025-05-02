<?php
$pdo = new PDO("mysql:host=localhost;dbname=perfor_+","root","");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];


    $sql = "SELECT * FROM abonnements WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['categorie'] = $user['categorie'];

        switch ($user['categorie']) {
            case 'U6':
                header("Location: U6.php");
                break;
            case 'U18':
                header("Location: U18.php");
                break;
            case 'Séniors':
                header("Location: Seniors.php");
                break;
            default:
                header("Location: accueil.php");
                break;
        }
        exit();
    } else {
        $error_message = "Identifiants incorrects. Veuillez vérifier vos informations.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>
<div class="connexion-container">
    <h1 class="connexion-title">Connectez-vous</h1>
    <p class="pas_compte">
        Vous n'avez pas de compte ?
        <a href="abonnement.php" class="inscription-link">
            Inscrivez-vous <span class="arrow">➔</span>
        </a>
    </p>
    <div class="connexion">
        <img src="image/Capture%20d'écran%202025-03-26%20104942.png" alt="Logo">
        <?php
        if (isset($error_message)) {
            echo "<p style='color: red;'>$error_message</p>";
        }
        ?>
        <form method="post" action="connexion.php">
            <p>Email</p>
            <input type="email" name="email" required><br>
            <p>Mot de passe</p>
            <input type="password" name="mot_de_passe" required><br>
            <button class="abonnement" type="submit">SE CONNECTER</button>
        </form>
    </div>
</div>
</body>
<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>Catégorie</h3>
            <ul>
                <li><a href="#cat">U6</a></li>
                <li><a href="#cat">U18</a></li>
                <li><a href="#cat">Séniors</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Thème</h3>
            <ul>
                <li><a href="#Jeux-réduits">Technique</a></li>
                <li><a href="#Travail-de-groupe">Physique</a></li>
                <li><a href="#Theme">Tactique</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Légal</h3>
            <ul>
                <li><a href="mentions.html">Mentions légales</a></li>
                <li><a href="#">Conditions d'utilisation</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    <p class="footer-bottom">© 2025 - Mon site de foot</p>
</footer>
</html>
