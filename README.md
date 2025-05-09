# Plateforme de gestion d'entraînements de football

## 🎯 Objectif du projet

Ce projet a pour but de permettre aux entraîneurs et joueurs des catégories U6, U18 et Séniors d'accéder à des contenus d'entraînement (exercices, schémas, etc.) via un système d'abonnement validé par un administrateur.

---

## ⚙️ Fonctionnalités principales

- Inscription d’un utilisateur avec choix de la catégorie
- Connexion d’un administrateur
- Validation / Refus des abonnements via un dashboard
- Accès conditionnel aux contenus par statut de validation
- Interface utilisateur moderne avec formulaire stylisé

---

## 🛠️ Technologies utilisées

- **Frontend** : HTML, CSS, JavaScript
- **Backend** : PHP
- **Base de données** : MySQL
- **SGBD** : phpMyAdmin

---

## 🔧 Installation

1. Cloner le dépôt :
   ```bash
   git clone https://github.com/votre-projet/football-trainer.git
   ```
2. Importer le fichier `.sql` dans phpMyAdmin
3. Modifier les accès à la base de données dans les fichiers PHP :
   ```php
   $pdo = new PDO('mysql:host=localhost;dbname=perfor_+', 'root', '');
   ```
4. Lancer le projet depuis `localhost` ou un serveur local type XAMPP/Laragon

---

## 🔐 Accès administrateur

Pour accéder au tableau de bord admin :
- Créer un compte via `admin_register.php`
- Se connecter via `admin_login.php`
- Valider ou refuser les inscriptions dans `admin_dashboard.php`

---

## 📁 Arborescence

```
foot-perfor/
│
├── controller/                       # 🧠 Contrôleurs : logiques métiers
│   ├── admin.php                     # Gère les actions liées à l’administration (validation abonnés, session, etc.)
│   ├── admin_dashboard.php           # Logique spécifique au tableau de bord (vue, actions, gestion des états)
│   ├── admin_register.php            # Traitement du formulaire pour créer un nouvel admin
│
├── model/                            # 📦 Modèles : gestion des données (à compléter)
│                                     # Exemples : Abonnement.php, Admin.php (accès BDD, PDO, fonctions métiers)
│
├── view/                             # 🎨 Vues réutilisables (à créer si tu veux séparer HTML)
│                                     # Peut contenir des partials comme header.php, footer.php, etc.
│
├── public/                           # 🌐 Répertoire accessible publiquement (point d’entrée)
│   ├── index.php                     # Page d’accueil ou routeur principal du site
│   ├── images/                       # 📷 Ressources images du site
│   │   ├── contenu images            # Ex : logo, arrière-plans, icônes, captures
│   ├── video/                        # 📹 Contenus vidéo pour les entraînements ou présentations
│   │   ├── contenu video
│   ├── abonnement_form.php          # Formulaire d’inscription des utilisateurs
│   ├── connexion_form.php           # Formulaire de connexion utilisateur
│   ├── admin_login.php              # Formulaire de connexion admin
│   ├── admin_dashboard.php          # Interface de gestion des utilisateurs (admin)
│   ├── U6.php                        # Page des entraînements pour la catégorie U6
│   ├── U18.php                       # Page des entraînements pour la catégorie U18
│   ├── Seniors.php                  # Page des entraînements pour la catégorie Séniors
│   ├── style.css                    # Feuille de style principale du site
│   ├── mentions.php                 # Page des mentions légales
│   └── conditions.php               # Page des conditions d’utilisation
│
├── routes/                          # 🛣️ Fichier de routage (optionnel)
│   └── web.php                      # Tu peux y définir les routes de manière centralisée
│
├── .env                             # 🔐 Fichier d’environnement (ex : infos DB, variables sensibles)
│
├── README.md                        # 📄 Documentation rapide du projet
│
└── config/                          # ⚙️ Configuration générale
    └── config.php                   # Connexion à la base de données, constantes globales
             

```

---

## 📌 Auteur

- NGUEMA THEYDERT Keran Jean
- BTS SIO – Option SLAM
- Contact : keranthey02@gmail.com

---

