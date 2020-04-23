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
    <input type="hidden" id="gameid" value="<?php echo $gameid; ?>">
    <input type="hidden" id="username" value="<?php echo $_SESSION['user']; ?>">
    <title>Nightphase</title>
</head>
<body>
    <main>
        
    </main>
</body>
<script src="libraries/jquery-3.5.0.min.js"></script>
<script src="libraries/updateGame.js"></script>
<script src="libraries/game.js"></script>
</html>