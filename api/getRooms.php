<?php
    $db = new PDO('mysql:host=localhost;dbname=game_db;charset=utf8', 'root', '');
    $query = $db->prepare("DELETE FROM in_game WHERE timestamp < now() -5");
    $query->execute();
    $query = $db->prepare("DELETE FROM rooms WHERE players = 0");
    $query->execute();
    $query = $db->prepare("SELECT * FROM rooms WHERE players != 10 AND started = false");
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $data = json_encode($results);
    echo $data;
?>