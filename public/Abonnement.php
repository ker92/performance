<?php
$host = 'localhost';
$dbname = 'perfor_+';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["email"]) && !empty($_POST["mot_de_passe"]) && !empty($_POST["categorie"])) {
        $email = htmlspecialchars($_POST["email"]);
        $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT);
        $categorie = htmlspecialchars($_POST["categorie"]);
        $date_abonnement = date("Y-m-d");
        $statut = 'en_attente'; // ✅ Ajouté

        $sql = "INSERT INTO abonnements (email, mot_de_passe, categorie, date_abonnement, statut)
                VALUES (:email, :mot_de_passe, :categorie, :date_abonnement, :statut)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':email' => $email,
            ':mot_de_passe' => $mot_de_passe,
            ':categorie' => $categorie,
            ':date_abonnement' => $date_abonnement,
            ':statut' => $statut // ✅ Ajouté
        ]);

        echo "Abonnement enregistré avec succès (en attente de validation) !";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Abonnement</title>
    <style>

    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <img src="image//Capture d'écran 2025-03-26 104942.png">
        <h1>Accedez à des centaines d'exercices et des schémas<br>
            et deviens plus performant</h1>
        <form method="post" action="Abonnement.php">
            <p>Prenom</p>
            <input type="Prenom" name="prenomr" placeholder="votre prenom"><br>
            <p>Catégorie</p>
            <select name="categorie" required>
                <option value="" disabled selected style="color: darkgrey ">Choisissez une catégorie</option>
                <option value="U6">U6</option>
                <option value="U18">U18</option>
                <option value="Séniors">Séniors</option>
            </select><br>
            <p>Adresse e-mail</p>
            <input type="email" name="email" placeholder="Votre email" required><br>
            <p>Mot de passe</p>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe" required><br>


            <button class="abonnement" type="submit">ACCEDER A DES EXERCICES</button>
        </form>
    </div>

    <div class="image-container">
        <img src="image/_ag18005.jpg" alt="img">
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
