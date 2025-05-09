<?php

?>
<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Esoace U18</title>
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
<main>
    <div class="Bienvenue">
        <h1>Exercices de foot U18<br></h1>
        <p>Séances de football U18 complètes que vous pouvez appliquer afin de faire progresser vos joueurs lors de vos<br>
            séances. Inscrivez-vous pour accéder à tous les exercices U18.</p>
    </div>

    <div class="Tactique">
        <h3>Le travail tactique </h3>
        <p>À l'âge U18, un joueur doit faire preuve d'une grande intelligence de jeu et être capable de s'adapter à différents<br>
            styles tactiques, car la performance à ce niveau repose autant sur la technique que sur la compréhension stratégique du jeu.</p>

        <img src="image/photo_2025-04-09_12-39-18.jpg" alt="tactique">
        <h3>1. Le 4-4-2 : l’équilibre classique</h3>
        <p>
            Cette formation aligne 4 défenseurs, 4 milieux de terrain et 2 attaquants. Elle est très utilisée car elle offre un<br>
            bon équilibre entre défense et attaque. Les deux lignes de 4 permettent une couverture efficace du terrain, et les 2<br>
            attaquants peuvent facilement combiner ou presser la défense adverse. Elle est idéale pour des équipes qui veulent <br>
            être solides tout en gardant des options offensives rapides.
        </p>

        <h3>2. Le 4-3-3 : la formation offensive</h3>
        <p>
            Le 4-3-3 comprend 4 défenseurs, 3 milieux (souvent 1 sentinelle et 2 relayeurs), et 3 attaquants (2 ailiers + 1 avant-centre).<br>
            Cette formation est parfaite pour les équipes qui aiment dominer le jeu et jouer sur les ailes. Elle favorise les attaques <br>
            rapides et le pressing haut, tout en gardant un bon contrôle du milieu. Elle demande cependant des milieux très actifs et <br>
            des latéraux solides.
        </p>

        <h3>3. Le 4-2-3-1 : la modernité structurée</h3>
        <p>
            Avec 2 milieux défensifs, 3 joueurs offensifs derrière l’attaquant, cette formation allie stabilité défensive et souplesse<br>
            offensive. Elle permet de bien protéger la défense tout en donnant de la liberté au "n°10", souvent le meneur de jeu. Elle <br>
            est très populaire car elle s’adapte bien à de nombreux styles : contre-attaque, possession, ou jeu direct.
        </p>

        <h3>4. Le 3-5-2 : domination du milieu</h3>
        <p>
            Cette formation repose sur 3 défenseurs centraux et 2 latéraux très offensifs. Elle permet de saturer le milieu de terrain<br>
            idéal pour les équipes qui veulent contrôler le rythme du match. Les latéraux doivent beaucoup courir, car ils assurent à<br>
            la fois le rôle défensif et offensif sur les côtés. Elle est souvent utilisée quand une équipe veut créer la supériorité<br>
            au milieu.
        </p>

        <h3>5. Le 5-3-2 : l’approche défensive</h3>
        <p>
            Cette formation est en réalité un 3-5-2 en phase offensive et un 5-3-2 en phase défensive. Avec 5 défenseurs (dont 2 pistons)<br>
            elle offre une grande solidité et permet de défendre bas en bloc. Elle est utilisée contre des équipes très fortes pour limiter <br>
            les espaces et lancer des contre-attaques rapides via les ailes.
        </p>

        <h3>6. Le 4-1-4-1 : pour bloquer l’adversaire</h3>
        <p>
            Cette variante du 4-3-3 utilise un seul milieu défensif (le 6) devant la défense, et 4 milieux plus avancés.<br>
            Le but est de casser les lignes adverses et garder un bloc compact. Très utilisé quand l’équipe veut garder<br>
            un score ou neutraliser un milieu adverse très fort.
        </p>

        <h3>7. Le 4-3-2-1 : le "sapin de Noël"</h3>
        <p>
            Composé de 4 défenseurs, 3 milieux, 2 milieux offensifs et 1 attaquant, ce système est conçu pour verrouiller<br>
            le milieu tout en créant des combinaisons offensives dans l’axe. Très tactique, il demande de la discipline mais <br>
            est très efficace contre les équipes qui jouent large.
        </p>

        <h3>8. Le 3-4-3 : le pressing total</h3>
        <p>
            Très offensif, ce schéma mise sur 3 défenseurs, 4 milieux (souvent avec 2 pistons), et 3 attaquants. <br>
            Il permet de presser haut, mais nécessite une excellente organisation pour ne pas se faire surprendre<br>
            en contre. Parfait pour les équipes dominantes qui veulent garder le ballon.
        </p>

        <h3>9. Le 4-2-2-2 : la fluidité brésilienne</h3>
        <p>
            Typique du football sud-américain, ce système repose sur 2 milieux défensifs et 2 milieux offensifs très libres.<br>
            Il donne beaucoup de liberté créative, avec 2 attaquants mobiles. Il est exigeant physiquement mais très beau à <br>
            voir quand bien appliqué.
        </p>


    </div>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ppbYyCH6A59PybJcHRyP0pftInTCeK5e/4N2hN4bJxt/NM99Up4/BMGbNEHv4b2T" crossorigin="anonymous" defer></script>
<script src="Script.js" defer></script>
<script src="https://kit.fontawesome.com/ab09c2f170.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>
