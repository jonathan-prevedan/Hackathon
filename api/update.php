<?php
    $db = new PDO('mysql:host=localhost;dbname=nightphase;charset=utf8', 'root', '');

    $query = $db->prepare("SELECT * FROM in_game");
    $query->execute();
    $players = $query->fetchAll(PDO::FETCH_OBJ);

    foreach($players as $player){
        $query = $db->prepare("")

    }

?>