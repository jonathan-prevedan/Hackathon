<?php
    session_start();
    
    if(isset($_SESSION['user'])){
        header('Location: servers');
    }
    if(isset($_POST['play_btn'])){
        $_SESSION['user'] = trim(htmlspecialchars($_POST['username']));
        header('Location: servers');
    }
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <link rel="stylesheet" href="allcss.css" />
    </head>
 
    <body>
        <header>
            <img class="logoone" id="logo" alt="logo" src="logo.png"/>
            <a href="index.php"><h1>Pandemic</h1></a>
            <nav>
                <ul>
                    <li><a href="index.php#main_role">Les Rôles</a></li>
                </ul>
            </nav>
        </header>
        <main id="test">
            <form method="post">
                <h2>Connexion</h2>
                <input type="text" name="play_btn" class="text-field" placeholder="Nom d'utilisateur" />
                <a href="#"><input type="button" value="Connexion" class="button" name="play_btn" /></a>
            </form>
        </main>
    </body>
</html>