<?php
    $user = $_POST['user'];  
    $gameid = $_POST['gameid'];
    $db = new PDO('mysql:host=localhost;dbname=game_db;charset=utf8', 'root', '');
    $query = $db->prepare("UPDATE in_game SET timestamp = now() WHERE user = '$user' AND id_game = '$gameid'");
    $query->execute();
    $query = $db->prepare("DELETE FROM in_game WHERE timestamp < now() -5");
    $query->execute();
?>