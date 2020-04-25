<?php
    $db = new PDO('mysql:host=localhost;dbname=nightphase;charset=utf8', 'root', '');

    $query = $db->prepare("UPDATE servers SET players = (SELECT COUNT(id) FROM in_game WHERE server = servers.id AND status = 'joined')");
    $query->execute();

    $query = $db->prepare("SELECT server, username FROM in_game WHERE status = 'quitted'");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($result as $leaver){
        $value = "[".date('H:i:s')."] -> $leaver->username a quitté";
        $requete = "INSERT INTO logs (value, server) VALUES ('$value', '$leaver->server')";
        echo $requete;
        $query = $db->prepare("INSERT INTO logs (value, server) VALUES ('$value', '$leaver->server')");
        $query->execute();
        $query = $db->prepare("DELETE FROM in_game WHERE status = 'quitted'");
        $query->execute();
    }



    $query = $db->prepare("UPDATE in_game SET status = 'afk' WHERE UNIX_TIMESTAMP(NOW()) - 60 > timestamp AND (SELECT started FROM servers WHERE id = in_game.server) = true");
    $query->execute();
    $query = $db->prepare("UPDATE in_game SET status = 'quitted' WHERE UNIX_TIMESTAMP(NOW()) - 1 > timestamp AND (SELECT started FROM servers WHERE id = in_game.server) = false");
    $query->execute();


    $query = $db->prepare("UPDATE servers SET status = 1 WHERE players = 10 AND started = false");
    $query->execute();
    $query = $db->prepare("UPDATE servers SET status = 2 WHERE players < 10 AND started = false");
    $query->execute();
    $query = $db->prepare("UPDATE servers SET status = 4 WHERE players != 10 AND started = true");
    $query->execute();

    // $query = $db->prepare("SELECT id FROM servers WHERE players = 0");
    // $query->execute();
    // $logsreset = $query->fetchAll(PDO::FETCH_OBJ);

    // foreach($logsreset as $log){
    //     $query = $db->prepare("DELETE FROM logs WHERE server = '$log->id'");
    //     $query->execute();
    // }

    
?>