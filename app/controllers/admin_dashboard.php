<?php
session_start();


if (!isset($_SESSION["admin_id"])) {
    header("Location: admin_login.php");
    exit;
}

$pdo = new PDO('mysql:host=localhost;dbname=perfor_+', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["abonnement_id"], $_POST["action"])) {
    $id = $_POST["abonnement_id"];
    $action = $_POST["action"] === "valider" ? "valide" : "refuse";

    $stmt = $pdo->prepare("UPDATE abonnements SET statut = :statut WHERE id = :id");
    $stmt->execute(['statut' => $action, 'id' => $id]);
}

$stmt = $pdo->query("SELECT * FROM abonnements WHERE statut = 'en_attente'");
$abonnements = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 40px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        th {
            background-color: #1e3c72;
            color: white;
        }
        form {
            display: inline;
        }
        button {
            padding: 6px 12px;
            margin: 0 2px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }
        .valider { background-color: #28a745; }
        .refuser { background-color: #dc3545; }
    </style>
</head>
<body>
<h1>Abonnements en attente</h1>

<?php if (count($abonnements) === 0): ?>
    <p style="text-align:center;">Aucun abonnement en attente pour le moment.</p>
<?php else: ?>
    <table>
        <thead>
        <tr>
            <th>Email</th>
            <th>Catégorie</th>
            <th>Date d’abonnement</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($abonnements as $abonnement): ?>
            <tr>
                <td><?= htmlspecialchars($abonnement["email"]) ?></td>
                <td><?= htmlspecialchars($abonnement["categorie"]) ?></td>
                <td><?= htmlspecialchars($abonnement["date_abonnement"]) ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="abonnement_id" value="<?= $abonnement["id"] ?>">
                        <button type="submit" name="action" value="valider" class="valider">Valider</button>
                        <button type="submit" name="action" value="refuser" class="refuser">Refuser</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
</body>
</html>
