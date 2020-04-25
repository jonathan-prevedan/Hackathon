<?php

    $server = $_POST['server'];
    $db = new PDO('mysql:host=localhost;dbname=nightphase;charset=utf8', 'root', '');

    $query = $db->prepare("SELECT * FROM logs WHERE server = '$server'");
    $query->execute();
    $logs = json_encode($query->fetchAll(PDO::FETCH_OBJ));
    echo $logs;


?>