<?php

    $server = $_POST['server'];
    $username = $_POST['username'];


    $db = new PDO('mysql:host=localhost;dbname=nightphase;charset=utf8', 'root', '');

    $query = $db->prepare("SELECT id FROM in_game WHERE username = '$username' AND server = '$server'");
    $query->execute();
    $result = $query->rowCount();

    if($result == 0){
        $query = $db->prepare("INSERT INTO in_game (server, username, timestamp) VALUES ('$server', '$username', now())");
        $query->execute();
    }
    else{
        $query = $db->prepare("UPDATE in_game SET timestamp = now() WHERE username = '$username' AND server = '$server'");
        $query->execute();
    }

?>