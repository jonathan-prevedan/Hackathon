<?php
    require_once('libraries/settings.php');

    if(isset($_POST['create_game'])){
        $uniqid = hexdec(uniqid());
        $name = $_POST['game_name'];
        $db = new PDO('mysql:host=localhost;dbname=game_db;charset=utf8', 'root', '');
        $query = $db->prepare("INSERT INTO rooms (uniqid, name) VALUES ('$uniqid', '$name')");
        $query->execute();
        header("Location: game?i=".$uniqid);
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animations.css">
    <title>Salons</title>
</head>
<body>
    <main>
        <div class="wrapper">
            <i class="fas fa-spinner spin" id="spinner"></i>
            
        </div>
        <button id="btn_modal">Créer une partie</button>
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <form method="post">
                    <input type="text" name="game_name" placeholder="Entrer le nom de votre partie">
                    <input type="submit" name="create_game" value="Créer">
                </form>
            </div>
        </div>
    </main>
</body>
<script src="libraries/jquery-3.5.0.min.js"></script>
<script src="https://kit.fontawesome.com/8bb77e2df3.js" crossorigin="anonymous"></script>
<script src="libraries/rooms.js"></script>
<script src="libraries/app.js"></script>
</html>