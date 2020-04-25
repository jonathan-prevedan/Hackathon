<?php

    $server = $_POST['server'];
    $username = $_POST['username'];


    $db = new PDO('mysql:host=localhost;dbname=nightphase;charset=utf8', 'root', '');
    
    $query = $db->prepare("SELECT server, username FROM in_game WHERE status = 'quitted'");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($result as $leaver){
        $value = "[".date('H:i:s')."] -> $leaver->username a quitté";
        $query = $db->prepare("INSERT INTO logs (value, server) VALUES ('$value', '$leaver->server')");
        $query->execute();
        $query = $db->prepare("DELETE FROM in_game WHERE status = 'quitted'");
        $query->execute();
    }

    $query = $db->prepare("SELECT status FROM in_game WHERE username = '$username' AND server = '$server'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    $status = $result->status;
    if($status == ''){
        $query = $db->prepare("INSERT INTO in_game (server, username, timestamp) VALUES ('$server', '$username', UNIX_TIMESTAMP(NOW()))");
        $query->execute();
        $value = "[".date('H:i:s')."] -> $username a rejoins";
        $query = $db->prepare("INSERT INTO logs (value, server) VALUES ('$value', '$server')");
        $query->execute();
        $query = $db->prepare("SELECT id FROM players WHERE username = '$username' AND server = '$server'");
        $query->execute();
        $check = $query->rowCount();
        if($check == 0){
            $query = $db->prepare("INSERT INTO players (server, username) VALUES ('$server', '$username')");
            $query->execute();    
        }
    }
    else{
        $query = $db->prepare("UPDATE in_game SET timestamp = UNIX_TIMESTAMP(NOW()) WHERE username = '$username' AND server = '$server'");
        $query->execute();
    }
?>