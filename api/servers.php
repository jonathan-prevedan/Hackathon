<?php
    $db = new PDO('mysql:host=localhost;dbname=nightphase;charset=utf8', 'root', '');
    $query = $db->prepare("SELECT * FROM servers");
    $query->execute();
    $servers = $query->fetchAll(PDO::FETCH_OBJ);

    $servers = json_encode($servers);

    echo $servers;


?>