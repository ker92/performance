<?php


?>
<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Espace Séniors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header>
    <section class="nav-bar">
        <div id="A">
            <a href="index.html"> <img src="image/Capture d'écran 2025-03-26 104942.png" alt="logo" />
            </a>
        </div>
        <div id="B">
            <div class="menu-item"><a href="index.html"> <h1> Accueil</h1></a></div>
            <div class="menu-item dropdown-categorie">
                <h1 onclick="toggleDropdown()">Catégorie</h1>
                <ul class="dropdown-menu" id="categorieDropdown">
                    <li onclick="redirigerCategorie('U6')">U6</li>
                    <li onclick="redirigerCategorie('U18')">U18</li>
                    <li onclick="redirigerCategorie('Séniors')">Séniors</li>
                </ul>
            </div>

            <div class="menu-item"><a href="connexion.php"> <h1>Connexion</h1> </a>
            </div>
            <form method="post" action="Abonnement.php">
                <button class="abonnement" type="submit">
                    <h1>S'ABONNER</h1>
                </button>
            </form>
        </div>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Catégorie
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="connexion.php">U6</a></li>
                                    <li><a class="dropdown-item" href="connexion.php">U18</a></li>
                                    <li><a class="dropdown-item" href="connexion.php">Séniors</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="connexion.php">Connexion</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </section>
</header>
<body>
<main>
    <div class="Bienvenue">
        <h1>Exercices de foot Séniors</h1>
        <p> Bienvenue dans ton espace Séniors!
            Félicitations pour ton inscription ! Tu fais maintenant partie de notre communauté dédiée aux entraîneurs et joueurs passionnés.<br>

            Tu as désormais accès à toutes nos séances complètes Séniors, conçues par des experts pour accompagner tes joueurs vers le plus haut niveau.
            Chaque entraînement est pensé pour développer l’intelligence de jeu, la maîtrise technique et la performance collective.
        </p>
    </div>

    <div class="travail-tech" id="travail-tech">
        <h1>Travail technique</h1>
        <p>La conduite de balle chez un joueur sénior repose sur une maîtrise technique avancée.<br>
            Elle permet de garder le contrôle du ballon tout en s'adaptant à la pression adverse,<br>
            en changeant de direction rapidement et en gardant la tête levée pour analyser le jeu.<br>
            Ce travail affine la coordination, la précision des touches et la fluidité des déplacements.
        </p>

        <video controls>
            <source src="vidéo/tech_2025-04-19_19-13-48.mp4" type="video/mp4">

        </video>
    </div>

    <section class="controle-oriente" id="controle-oriente">


        <div class="video-container">
           <video controls>
               <source src="vidéo/contrôle%20orienté.mp4" type="video/mp4">
           </source>
        </div>


        <div class="texte-controle" >
            <h2>Contrôle orienté dos au jeu</h2>
            <p>
                Le contrôle orienté dos au jeu est une technique essentielle pour tout joueur qui veut gagner du temps
                et casser une ligne défensive. Il consiste à orienter sa première touche vers un espace libre
                ou dans une direction stratégique, tout en étant dos au but adverse.
            </p>
            <p>
                 <strong>À quoi ça sert ?</strong><br>
                - À se mettre rapidement face au jeu.<br>
                - À échapper au pressing.<br>
                - À préparer une passe ou une percée sans ralentir le jeu.
            </p>
            <p>
                 <strong>Quand l’utiliser ?</strong><br>
                - Quand tu reçois une passe sous pression.<br>
                - Quand tu as identifié un espace libre derrière toi.<br>
                - Juste avant de te retourner ou d'enchaîner une action offensive.
            </p>
            <p>
                 <strong>Comment le faire ?</strong><br>
                - Scanne ton environnement avant de recevoir le ballon.<br>
                - Oriente ton pied pour guider le ballon vers l’espace voulu.<br>
                - Utilise l’intérieur ou l’extérieur du pied selon la direction et ton pied fort.<br>
                - Tourne avec le ballon et enchaîne.
            </p>
        </div>
    </section>

    <section class="dribble-1v1" id="1v1">
        <div class="video-container">
            <video controls>
                <source src="vidéo/1v1.mp4" type="video/mp4">
            </video>
        </div>

        <div class="texte-dribble">
            <h2>Dribble 1 contre 1</h2>
            <p>
                Le dribble 1v1 est une compétence essentielle pour créer des différences dans le jeu offensif.<br>
                Il permet de dépasser un adversaire direct et d’ouvrir des espaces.
            </p>
            <p>
                <strong>À quoi ça sert ?</strong><br>
                - Prendre l’avantage dans un duel.<br>
                - Créer un déséquilibre dans la défense.<br>
                - Déclencher une action dangereuse.
            </p>
            <p>
                <strong>Quand l’utiliser ?</strong><br>
                - Lorsque tu es face à un adversaire en 1v1.<br>
                - Quand l’équipe a besoin d’un déclencheur offensif.<br>
                - En zone de finition, ou sur les côtés.
            </p>
            <p>
                <strong>Comment le faire ?</strong><br>
                - Observe le positionnement du défenseur.<br>
                - Utilise des changements de rythme.<br>
                - Enchaîne une feinte (passement de jambe, crochet, petit pont).<br>
                - Protège le ballon après avoir éliminé.
            </p>
        </div>
    </section>


    <h1 class="titre-centre"> Travail physique</h1>
    <section class="endurance-section">

        <section class="endurance-section">
            <h1 class="titre-endurance">Travail d'endurance</h1>

            <div class="contenu-endurance">
                <div class="image-container">
                    <img src="image/endurance.jpg" alt="endurance">
                </div>

                <div class="texte-endurance">
                    <h3>Travailler l'endurance dans le football</h3>
                    <p>
                        L’endurance est la capacité à maintenir un effort prolongé sans grosse baisse de régime.
                        En football, elle permet de rester performant du début à la fin du match.
                    </p>
                    <p>
                        <strong>À quoi ça sert ?</strong><br>
                        - À tenir les courses répétées pendant 90 minutes.<br>
                        - À mieux récupérer entre chaque action.<br>
                        - À garder sa lucidité dans les moments décisifs.
                    </p>
                    <p>
                        <strong>Quand et comment la travailler ?</strong><br>
                        - En pré-saison pour construire une bonne base aérobie.<br>
                        - Avec des courses à intensité variable (intervalles).<br>
                        - À travers des jeux réduits et des exercices spécifiques sur le terrain.
                    </p>
                    <p>
                        <strong>Exemples d’exercices :</strong><br>
                        - 4x4min à 80-90% de ta fréquence cardiaque maximale.<br>
                        - Jeu réduit 6v6 avec objectifs (haute intensité et récupération active).<br>
                        - Fartlek (enchaînement de rythmes différents en courant).
                    </p>
                </div>
            </div>
        </section>
    </section>

        <div class="texte-recuperation">
        <h3>Améliorer la récupération des efforts en football</h3>

        <div class="bloc-texte-image">
            <img src="image/repetition.jpeg" alt="effort intense">
            <p>
                Être capable de répéter des efforts intenses (sprints, courses, duels) avec une récupération rapide,
                c’est la base pour performer pendant 90 minutes.
            </p>
        </div>

        <div class="bloc-texte-image">
            <img src="image/retour.webp" alt="bénéfices récupération">
            <p>
                <strong>À quoi ça sert ?</strong><br>
                - Revenir rapidement à un bon niveau après un sprint.<br>
                - Être prêt pour le prochain effort sans perte de performance.<br>
                - Limiter la fatigue et éviter les blessures musculaires.
            </p>
        </div>

        <div class="bloc-texte-image">
            <img src="image/intervalles.jpg" alt="méthode d'entraînement">
            <p>
                <strong>Comment la travailler ?</strong><br>
                - Intervalles courts avec récupération incomplète.<br>
                - Jeux réduits avec forte intensité et temps de repos limité.<br>
                - Exercices de HIIT spécifiques au football.
            </p>
        </div>

        <div class="bloc-texte-image">
            <img src="image/circuit.jpg" alt="exercices récupération">
            <p>
                <strong>Exemples d’exercices :</strong><br>
                - 10 x 30m sprint / 30 sec repos.<br>
                - 4 x (3 min jeu réduit intense / 1 min repos).<br>
                - Circuit training fonctionnel (corde, escaliers, cônes).
            </p>
        </div>
    </div>

        <section class="tactique-section">
            <h2 class="titre-tactique">Animations offensives</h2>

            <div class="contenu-tactique">
                <div class="image-tactique">
                    <img src="image/animation.jpg" alt="animation offensive">
                </div>

                <div class="texte-tactique">
                    <h3>Construire et désorganiser l’adversaire</h3>
                    <p>
                        L'animation offensive vise à créer des espaces, désorganiser la défense adverse et produire des situations dangereuses.
                    </p>
                    <p>
                        <strong>Points clés :</strong><br>
                        - Circulation rapide du ballon pour déplacer le bloc adverse<br>
                        - Appels en profondeur, décrochages, jeu entre les lignes<br>
                        - Utilisation des couloirs et dédoublements<br>
                        - Variation entre jeu court et jeu long
                    </p>
                    <p>
                        <strong>Exemples de situations travaillées :</strong><br>
                        - Attaque placée en 4-3-3 avec permutation des ailiers<br>
                        - Jeu combiné dans les 30 derniers mètres<br>
                        - Centre en bout d’action avec finition en une touche
                    </p>
                </div>
            </div>
        </section>


        <section class="transition-defensive">
            <h2 class="titre-transition">Transition défensive</h2>
            <div class="bloc-tactique">
                <img src="image/pressing.png" alt="Réaction à la perte de balle">
                <p>
                    <strong>Réagir dès la perte</strong><br>
                    Les premières secondes après la perte sont décisives : le porteur et ses soutiens doivent immédiatement presser ou ralentir la progression adverse.
                </p>
            </div>

            <div class="bloc-tactique">
                <img src="image/bloc%20compact.webp" alt="Reformation du bloc">
                <p>
                    <strong>Reformer un bloc compact</strong><br>
                    Toute l’équipe doit coulisser et se replier pour limiter les espaces entre les lignes et éviter les passes en profondeur.
                </p>
            </div>

            <div class="bloc-tactique">
                <img src="image/transition.png" alt="Exercice jeu réduit transition">
                <p>
                    <strong>Exercices spécifiques</strong><br>
                    - Jeux réduits avec changement rapide de possession.<br>
                    - Enchaînements perte/récupération.<br>
                    - Travail du repli rapide et du replacement.
                </p>
            </div>
        </section>






</main>

</body>
<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>Catégorie</h3>
            <ul>
                <li><a href="connexion.php">U6</a></li>
                <li><a href="connexion.php">U18</a></li>
                <li><a href="connexion.php">Séniors</a></li>
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
                <li><a href="mention.html">Mentions légales</a></li>
                <li>Contact<br>
                    Tel: +33 744878032<br>
                    E-mail: keranthey02@gmail.com</li>
            </ul>
        </div>
    </div>
    <p class="footer-bottom">© 2025 - Mon site de foot</p>
</footer>
</html>
