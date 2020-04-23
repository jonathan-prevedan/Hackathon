<?php
    if(empty($_GET['i'])){
        header('Location: index.php');
    }
    session_start();
    // $user = $_SESSION['user'];
    $gameid = $_GET['i'];
    $db = new PDO('mysql:host=localhost;dbname=game_db;charset=utf8', 'root', '');
    $query = $db->prepare("SELECT id FROM in_game WHERE id_game = '$gameid'")
    $query = $db->prepare("SELECT id FROM in_game WHERE user = 'toto'");
    $query->execute();
    $check = $query->rowCount();
    if($check == 0){
        $query = $db->prepare("INSERT INTO in_game (user, timestamp, id_game) VALUES ('toto', now(), '$gameid')");
        $query->execute();
    }
    else{
        $query = $db->prepare("UPDATE in_game SET timestamp = now() WHERE user = 'toto' AND id_game = '$gameid'");
        $query->execute();
    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie : <?php echo $_GET['i']; ?></title>
    <input type="hidden" id="gameid" value="<?php echo $_GET['i']; ?>">
    <input type="hidden" id="userid" value="toto">
</head>
<body>
    
</body>
<script src="libraries/jquery-3.5.0.min.js"></script>
<script src="https://kit.fontawesome.com/8bb77e2df3.js" crossorigin="anonymous"></script>
<script src="libraries/check.js"></script>
</html>