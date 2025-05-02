<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT);

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=perfor_+', 'root', '');
        $stmt = $pdo->prepare("INSERT INTO admin (email, mot_de_passe) VALUES (:email, :mot_de_passe)");
        $stmt->execute(['email' => $email, 'mot_de_passe' => $mot_de_passe]);
        $message = "Administrateur créé avec succès.";
    } catch (PDOException $e) {
        $message = "Erreur : " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un administrateur</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 350px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            background: #1e3c72;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background: #163061;
        }
        .message {
            margin-bottom: 15px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
<div class="form-box">
    <h2>Créer un administrateur</h2>

    <?php if (!empty($message)) : ?>
        <div class="message"><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>

    <form method="post">
        <input type="email" name="email" placeholder="Email admin" required>
        <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
        <button type="submit">Créer</button>
    </form>
</div>
</body>
</html>

