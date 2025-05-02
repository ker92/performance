<?php
session_start();
if (!isset($_SESSION["admin_id"])) {
    header("Location: admin_login.php");
    exit;
}

$pdo = new PDO('mysql:host=localhost;dbname=perfor_+', 'root', '');

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['valider_id'])) {
    $stmt = $pdo->prepare("UPDATE abonnements SET valide = TRUE WHERE id = :id");
    $stmt->execute(['id' => $_POST['valider_id']]);
}

$stmt = $pdo->query("SELECT * FROM abonnements WHERE valide = FALSE");
$abonnements = $stmt->fetchAll();
?>

<h1>Abonnements à valider</h1>
<?php foreach ($abonnements as $abo): ?>
    <p>
        <?= htmlspecialchars($abo['email']) ?> - <?= htmlspecialchars($abo['categorie']) ?>
    <form method="post" style="display:inline">
        <input type="hidden" name="valider_id" value="<?= $abo['id'] ?>">
        <button type="submit">Valider</button>
    </form>
    </p>
<?php endforeach; ?>

