
    <?php

        ?>
    <!doctype html>
    <html lang="fr" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Espace U6</title>
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
                                    <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Thèmes</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Catégorie
                                    </a>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Connexion</a>
                                </li>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
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
        <h1>Exercices de foot U6</h1>
        <p>Séances de football U6 complètes que vous pouvez appliquer afin de faire progresser vos joueurs lors de vos<br>
        séances.</p>
    </div>

    <div class="conduite">
        <h3>Conduite de balle de football U-6</h3>

        <p>
            La conduite de balle chez les U6 consiste à apprendre aux tout-petits à se déplacer avec le ballon tout en le
            gardant proche d’eux. À cet âge, l’objectif principal est de leur faire découvrir le plaisir de jouer avec le
            ballon, en développant leur coordination, leur équilibre et leur motricité. À travers des jeux simples et
            ludiques, comme des slaloms, des courses avec le ballon ou des petits défis colorés, les enfants apprennent
            à pousser doucement le ballon avec l’intérieur ou l’extérieur du pied. Le plus important est qu’ils s’amusent
            et prennent confiance en eux sur le terrain.
        </p>

        <video class="v-conduite" controls>
            <source src="vidéo/video_2025-04-05_21-31-08.mp4" type="video/mp4">
        </video>
             <h3>Objectifs pédagogiques :</h3>
           <ul>
            <li>Développer la coordination œil-pied</li><br>
            <li> Apprendre à garder le ballon proche du pied</li><br>
            <li>S’orienter dans l’espace avec le ballon</li><br>
            <li> Gérer la vitesse et le contrôle</li><br>
            <li>Encourager la concentration et le travail en équipe</li> <br>
        </ul>

           <h3> Déroulement de l’exercice :</h3>
            <p>Installation du matériel :<br>
               Dispose 5 à 6 cônes en ligne droite, espacés d’environ 1 mètre.<br>
               Formez 2 ou 3 lignes de joueurs (par groupe ou coéquipiers), chacun avec un ballon.<br>
           <h3>Phase active (conduite) :</h3>
           <p> Le premier joueur de chaque ligne commence l'exercice :<br>
               Il conduit le ballon en slalomant entre les cônes,<br>
               En utilisant l’intérieur et l’extérieur du pied,<br>
               À vitesse modérée, pour bien garder le contrôle du ballon.</p>
              <h3> Retour :</h3>
           <p> Arrivé à la fin du parcours, il peut :<br>Soit faire demi-tour en ligne droite et revenir à son point de départ,<br>
               Soit faire une passe au coéquipier suivant, qui enchaîne à son tour.</p>
           <h3> Répétitions :</h3>
           <p> Chaque joueur répète le parcours 4 à 5 fois.<br>
               On peut varier la consigne à chaque passage :<br>
               uniquement pied droit, puis uniquement pied gauche, ou en ajoutant une petite accélération à la fin.</p>
            <h3> Travail en groupe :</h3>
           <p> Les enfants travaillent en équipe, encouragent leurs coéquipiers,<br>
               Apprennent à attendre leur tour, à regarder les autres jouer et à imiter leurs gestes.<br></p>
                <h3>Conseils pour l’éducateur :</h3>
            <p>Valoriser la précision plutôt que la vitesse,<br>
               Corriger gentiment les postures (regard levé, pied en cloche),<br>
               Varier les parcours en forme de zigzag, cercle ou avec obstacles colorés pour garder l’attention.

        </p>
        <h3>Conduite de bale avec 4 couleurs</h3>
    </div>


</main>

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
<script src="Script.js" defer></script>
</html>
