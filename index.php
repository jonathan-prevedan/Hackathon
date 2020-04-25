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
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Nightphase</title>
</head>
<body>
    <main>
        <div id="join_window">
            <form method="post">
                <input type="text" name="username" placeholder="Entrez votre pseudo">
                <input type="submit" value="Jouer" name="play_btn">
            </form>
        </div>
    </main>
</body>
<script src="libraries/update.js"></script>
</html>