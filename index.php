<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="descr...">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pandemic</title>
        <link rel="stylesheet" href="allcss.css">
        <script src="https://kit.fontawesome.com/a28a4d0835.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" href="logo.png">
    </head>

    <body>
        <header>
            <img class="logoone" id="logo" alt="logo" src="logo.png"/>
            <a href="#"><h1>Pandemic</h1></a>
            <nav>
                <ul>
                    <li><a href="#main_role">Les Rôles</a></li>
                    <li><a href="#Règlement">Règlement</a></li>            
                    <li><a href="connexion.php"><input type="button" value="Jouer !" /></a></li>
                </ul>
            </nav>
        </header>
        
        <section id="section_play">

           <div id="container_button">
                <h2>Jouer Une Partie !</h2>
                <a href="connexion.php"><input type="button" value="Jouer !" /></a>
           </div>

        </section>
        <main id="main_role">
            <section class="section_role">
                <!-- container1 -->
                <div class="container">
                    <img class="container__image" src="ciblepotentiel.carte.jpg">
                    <div class="container__text">
                        <h2>Cible-Potentielle</h2>
                        <p>Il ne dispose d'aucun pouvoir particulier : uniquement sa perspicacité et sa force de persuasion. Toutefois, tous les joueurs voient son rôle d'innocent.
                        </p>
                        <ul class="menu"></ul>
                    </div>
                </div>
                
                <!-- container2 -->
                <div class="container">
                    <img class="container__image" src="covid.carte.jpg">
                    <div class="container__text">
                        <h2>Covid</h2>
                        <p>Son objectif est de provoquer une grave infection capable de tuer tous les joueurs. Chaque nuit, il décide d'une cible à infecter…
                        </p>
                        <ul class="menu"></ul>
                    </div>
                </div>
            </section>

            <section class="section_role">
                <!-- container 3 -->
                <div class="container">
                    <img class="container__image" src="raoultcarte.jpg">
                    <div class="container__text">
                        <h2>Raoult</h2>
                        <p>Il dispose de deux atouts : un seul antidote pour soigner un joueur et un échantillon du covid-19 pour infecter un joueur.
                        </p>
                        <ul class="menu"></ul>
                    </div>
                </div>

                <!-- container 4 -->
                <div class="container">
                    <img class="container__image" src="porteursain.carte.jpg">
                    <div class="container__text">
                        <h2>Porteur Sain</h2>
                        <p>Son objectif est d'être éliminé par le village lors du premier vote de jour. S'il réussit, il gagne la partie. Sinon, il devient un Simple Villageois.
                        </p>
                        <ul class="menu"></ul>
                    </div>
                </div>
            </section>

            <section class="section_role">
            <!-- container5 -->
            <div class="container">
                <img class="container__image" src="medecincarte.jpg">
                <div class="container__text">
                    <h2>Médecin</h2>
                    <p> A sa mort, il a la possibilité d’infecter une personne.
                    </p>
                    <ul class="menu"></ul>
                </div>
            </div>

            <div class="container">
                    <ul class="menu"></ul>
                </div>
            </div>
        </section>
        </main>
    </body>
</html>