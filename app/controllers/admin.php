<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    $pdo = new PDO('mysql:host=localhost;dbname=perfor_+', 'root', '');
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($mot_de_passe, $admin['mot_de_passe'])) {
        $_SESSION["admin_id"] = $admin["id"];
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "Identifiants incorrects";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #1e3c72;
        }

        .login-container input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #1e3c72;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #163061;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Connexion Administrateur</h2>
    <form method="post">
        <input type="email" name="email" placeholder="Email admin" required>
        <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
        <button type="submit">Connexion</button>
    </form>
</div>

</body>
</html>

