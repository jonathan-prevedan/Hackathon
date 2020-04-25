<?php
    session_start();
    $gameid = $_GET['i'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animations.css">
    <input type="hidden" id="gameid" value="<?php echo $gameid; ?>">
    <input type="hidden" id="username" value="<?php echo $_SESSION['user']; ?>">
    <title>Nightphase</title>
</head>
<body>
    <main>
        <div class="content" id="players">
            <div class="player card">
                <img src="../images/tinder.png" alt="">
                <p>Joueur 1</p>
            </div>
            <div class="player card">
                <img src="../images/tinder.png" alt="">
                <p>Joueur 2</p>
            </div>
            <div class="player card">
                <img src="../images/tinder.png" alt="">
                <p>Joueur 3</p>
            </div>
            <div class="player card">
                <img src="../images/tinder.png" alt="">
                <p>Joueur 4</p>
            </div>
        </div>
        <div class="content" id="logs">
            
        </div>
        <div class="content" id="plate">Plateau des actions</div>
        <div class="content" id="player" class="card">
            <p><?php echo $_SESSION['user']; ?></p>
            <img class="card" src="../images/anonymous.png" alt="Carte du joueur">
        </div>
        <div class="content" id="infos">Zone des infos</div>
    </main>
</body>
<script src="../libraries/jquery-3.5.0.min.js"></script>
<script src="libraries/updateGame.js"></script>
<script src="libraries/server.js"></script>
</html>