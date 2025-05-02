<?php
// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
// Vérifier que tous les champs sont remplis
if (!empty($_POST["email"]) && !empty($_POST["mot_de_passe"]) && !empty($_POST["categorie"])) {

// Sécuriser les entrées
$email = htmlspecialchars($_POST["email"]);
$mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT); // Hachage sécurisé
$categorie = htmlspecialchars($_POST["categorie"]);
$date_abonnement = date("Y-m-d");

// Requête d'insertion
$sql = "INSERT INTO abonnements (email, mot_de_passe, categorie, date_abonnement)
VALUES (:email, :mot_de_passe, :categorie, :date_abonnement)";

$stmt = $pdo->prepare($sql);

// Exécution avec les paramètres
$stmt->execute([
':email' => $email,
':mot_de_passe' => $mot_de_passe,
':categorie' => $categorie,
':date_abonnement' => $date_abonnement
]);

echo " Abonnement enregistré avec succès !";
}
}
